<?php
$output['error']="";
session_start();
require_once("classLog.php");
require_once("function.php");
require_once("classBase.php");
$db=new Baza();
$db->connect();
if(isset($_POST['forgot_email']));
{
    if($_POST["forgot_email"]!="")
    {
        $email=$_POST["forgot_email"];
        $salt="UF4Uq2WXAx7b93z7svNZ";
        $valid_password=validNumber();
        $password=$valid_password.$salt;
        $pass_hash=md5($password);
        if(validanString($email))
        {
            $sql="SELECT * FROM users WHERE users_email='{$email}' LIMIT 1";
            $rez=$db->query($sql);
            if($db->num_rows($rez)==1)
            {
                $sql="UPDATE users SET users_password='{$pass_hash}', users_repassword='{$pass_hash}' WHERE users_email='{$email}'";
                $db->query($sql);
                if($db->affected_rows()==1)
                {

                    //Sending new password on email using SMTP PHP Mailer
                    require 'PHPMailerAutoload.php';

                    $mail = new PHPMailer;
                    
                    //$mail->SMTPDebug = 4;                               // Enable verbose debug output

                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = 'server host';                          // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = 'email username';                   // SMTP username
                    $mail->Password = 'email password';                   // SMTP password
                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587;                                    // TCP port to connect to

                    $mail->setFrom('email username', 'BorisPerkovic');
                    $mail->addAddress("$email");                          // Add a recipient
                    $mail->addReplyTo('email username');

                    /*$mail->addAttachment('/var/tmp/file.tar.gz');       //Add attachments
                    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name*/
                    $mail->isHTML(true);                                  // Set email format to HTML

                    $mail->Subject = 'Izmena lozinke - borisperkovic.rs';
                    $mail->Body    = "<div>

                                    <h4>Vaši podaci su:</h4><br>
                                    <p>E-mail: $email<br>Lozinka: ".$_POST['pass']."</p>

                                    </div>";

                    if(!$mail->send()) {
                        echo 'Zamena lozinke nije uspela nije uspelo.';
                        echo 'greska: ' . $mail->ErrorInfo;
                    }
                    else {
                        $output['error']="Uspešno ste izmenili lozinku. Podaci su poslati na Vašu E-mail adresu!";
                    }
                   Log::upisiLog("../logs/zamena_lozinke.txt", "$email je uspešno promenio lozinku"); 
                }
                else
                {
                    $output['error']="Neuspešna zamena lozinke!!";
                }
            }
            else
            {
                $output['error']="Nije ispravna E-mail adresa za korisnika ".$email;
            }
        }
        else
        {
            $output['error']="E-mail adresa sadrži nedozvoljene karaktere";
            Log::upisiLog("../logs/zamena_lozinke.txt", "Nedozvoljeni karakteri pri zameni lozinke - poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);
        }
    }
    else
    {
        $output['error']="Svi podaci su obavezni!!";
    }
}

echo JSON_encode($output, 256);
?>

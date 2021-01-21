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
                    $output['error']="Uspešno ste izmenili lozinku. Podaci su poslati na Vašu E-mail adresu!";

                    //Sending datas on email after changing the password
                    $to = "$email";
                    $subject = 'Zamena lozinke - boriscars.000webhostapp.com';
                    $headers = "From: BorisPerkovic <info@borisperkovic.rs"."\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                    $message = "<p>Uspešno ste izmenili lozinku.<br><br>Vaši podaci za prijavu su:<br><br>E-mail adresa: ".$email."<br><br>Nova lozinka: ".$valid_password."</p>";
                    mail($to, $subject, $message, $headers);
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

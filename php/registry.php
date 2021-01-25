<?php
require_once("function.php");
require_once("classBase.php");
require_once("classLog.php");
$db=new Baza();
$db->connect();
$status="";
$output['registryerror']="";
$output['registrysuccess']="";
if(isset($_POST['name']) and isset($_POST['lastname']) and isset($_POST['email']) and isset($_POST['pass']) and isset($_POST['passrepeat']) and isset($_POST['addres'])and isset($_POST['phone']))
{
    $salt="UF4Uq2WXAx7b93z7svNZ";
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'].$salt;
    $passrepeat=$_POST['passrepeat'].$salt;
    $pass_hash=md5($pass);
    $passrepeat_hash=md5($passrepeat);
    $addres=$_POST['addres'];
    $phone=$_POST['phone'];
    if($name!="" and $lastname!="" and $email!="" and $pass_hash!="" and $passrepeat_hash!="" and $addres!="" and $phone!="")
    {
      if(validanString($name) and validanString($lastname) and validanString($email) and validanString($pass_hash) and validanString($passrepeat_hash) and validanString($addres) and validanString($phone))
      {
        $sql="SELECT * FROM users WHERE users_email='{$email}' LIMIT 1";
        $rez=$db->query($sql);
        if($db->num_rows($rez)!=1)
        {
          if($pass_hash==$passrepeat_hash)
          {
            $valid_number=validNumber();
            $sql="INSERT INTO users (users_name, users_lastname, users_password, users_repassword, users_email, users_adress, users_phone, users_status, users_valid) VALUES ('{$name}', '{$lastname}', '{$pass_hash}', '{$passrepeat_hash}','{$email}', '{$addres}','{$phone}', '{$status}', '{$valid_number}')";
            $db->query($sql);
            $output['registryerror']="Uspešno ste kreirali nalog. Kompletirajte registraciju klikom na aktivacioni link koji je poslat na Vašu E-mail adresu";

            //Sending activation link on email
            $to = "$email";
            $subject = 'Potvrda registracije - boriscars.000webhostapp.com';
            $message = "<p>Kliknite na link ispod da kompletirate registraciju<br><strong><a href='https://boriscars.000webhostapp.com/BorisCars/php/active_registry.php?users_email=$email&valid_number=$valid_number'>Link za aktivaciju</a></strong></p>";
            $headers="";
            $headers.="Reply-To: BorisPerkovic <info@borisperkovic.rs>"."\r\n"; 
            $headers.="Return-Path: BorisPerkovic <info@borisperkovic.rs"."\r\n"; 
            $headers.="From: BorisPerkovic <info@borisperkovic.rs>"."\r\n";
            $headers.="Organization: BorisCars"."\r\n";
            $headers.="MIME-Version: 1.0"."\r\n";
            $headers.="Content-Type: text/html; charset=UTF-8"."\r\n";
            $headers.="X-Priority: 3"."\r\n";
            $headers.="X-Mailer: smail-PHP ".phpversion()."\r\n";
            mail($to, $subject, $message, $headers);


            Log::upisiLog("../logs/korisnici.txt", "$name $lastname $email je uspešno kreirao nalog kao novi korisnik");
          }
          else
          {
            $output['registryerror']="Lozinka i ponovljena lozinka se ne poklapaju!!";
          }
        }  
        else
        {
          $output['registryerror']="Korisnik sa E-mail adresom ".$email." već postoji!!";
          Log::upisiLog("../logs/korisnici.txt", "$name $lastname je pokušao da se registruje sa postojećom E-mail adresom $email"); 
        }
      }
      else
      {
        $output['registryerror']="U jednom od polja za unos postoje nedozvoljeni karakteri";
        Log::upisiLog("../logs/logovanja.txt", "Nedozvoljeni karakteri pri registraciji - poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);
      } 
    }
    else
        echo "Niste uneli sve podatke!!";
}
echo JSON_encode($output, 256);
?>

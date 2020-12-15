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
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $passrepeat=$_POST['passrepeat'];
    $addres=$_POST['addres'];
    $phone=$_POST['phone'];
    if($name!="" and $lastname!="" and $email!="" and $pass!="" and $passrepeat!="")
    { 
      $sql="SELECT * FROM users WHERE users_email='{$email}'";
      $rez=$db->query($sql);
      if($db->num_rows($rez)!=1)
      {
        if($pass==$passrepeat)
        {
          $sql="INSERT INTO users (users_name, users_lastname, users_password, users_repassword, users_email, users_adress, users_phone, users_status) VALUES ('{$name}', '{$lastname}', '{$pass}', '{$passrepeat}','{$email}', '{$addres}','{$phone}', '{$status}')";
          $db->query($sql);
          $output['registrysuccess']="Uspešno ste se registrovali. Želimo Vam srećnu i uspešnu kupovinu!";
          Log::upisiLog("../logs/korisnici.txt", "$name $lastname $email se uspešno registrovao kao novi korisnik");
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
        echo "Niste uneli sve podatke!!";
}
echo JSON_encode($output, 256);
?>

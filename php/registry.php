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
            $sql="INSERT INTO users (users_name, users_lastname, users_password, users_repassword, users_email, users_adress, users_phone, users_status) VALUES ('{$name}', '{$lastname}', '{$pass_hash}', '{$passrepeat_hash}','{$email}', '{$addres}','{$phone}', '{$status}')";
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

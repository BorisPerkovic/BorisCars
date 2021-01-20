<?php
require_once("function.php");
require_once("classBase.php");
require_once("classLog.php");
$db=new Baza();
$db->connect();
if(isset($_GET['users_email']) and isset($_GET['valid_number']))
{
    $users_email=$_GET['users_email'];
    $valid_number=$_GET['valid_number'];
    if($users_email!="" and $valid_number!="")
    {
        $sql="UPDATE users SET users_valid=1 WHERE users_email='{$users_email}' AND users_valid='{$valid_number}'";
        $db->query($sql);
        if($db->affected_rows()==1)
        {
           echo "<h4>Uspešno ste verifikovali nalog. Želimo Vam uspešnu i srećnu kupovinu!!</h4>";
           Log::upisiLog("../logs/korisnici.txt", "$users_email je uspešno verifikovao nalog kao novi korisnik"); 
        }
        else
        {
            echo "<h4>Neuspešna potvrda registracije!!</h4>";
        }
        
    }
    else
    {
        echo "Podaci za aktivaciju naloga nisu ispravni!!";
    }
}


?>
<?php
session_start();
require_once("function.php");
require_once("classBase.php");
require_once("classLog.php");
if(isset($_GET['logoff']))
{
    Log::upisiLog("../logs/logovanja.txt", "Uspešna odjava korisnika {$_SESSION['users_name']}");
    unistiSesiju();
    header("location: ../index.php");
    
}
$db=new Baza();
$db->connect();
$output['error']="";
$output['location']="";
if(isset($_GET['login']));
{
    if($_POST["username"]!="" AND $_POST["password"]!="")
    {
        $salt="UF4Uq2WXAx7b93z7svNZ";
        $username=$_POST["username"];
        $password=$_POST["password"].$salt;
        $pass_hash=md5($password);
        $remember=$_POST['remember'];
        if(validanString($username) and validanString($pass_hash))
        {
            $sql="SELECT * FROM users WHERE users_email='{$username}'";
            $rez=$db->query($sql);
            if($db->num_rows($rez)==1)
            {
                $red=$db->fetch_object($rez);
                if($pass_hash==$red->users_password)
                {
                    napraviSesiju($red->users_id, $red->users_name, $red->users_lastname, $red->users_status, $red->users_email);
                    Log::upisiLog("../logs/logovanja.txt", "{$_SESSION['users_name']} se uspešno ulogovao");
                    $output['location']="index.php";  
                }
                else
                {
                    $output['error']="Nije ispravna lozinka za korisnika ".$username;
                    Log::upisiLog("../logs/logovanja.txt", "Pogrešna lozinka {$username} - otkucana lozinka je {$password}, poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);
                }
            }
            else
            {
                $output['error']="Nije ispravna E-mail adresa za korisnika ".$username;
                Log::upisiLog("../logs/logovanja.txt", "Pogrešno korisničko ime {$username} - poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);
            }
        }
        else
        {
            $output['error']="E-mail adresa ili lozinka sadrže nedozvoljene karaktere";
            Log::upisiLog("../logs/logovanja.txt", "Nedozvoljeni karakteri od strane {$username} - poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);
        }
    }
    else
    {
        $output['error']="Svi podaci su obavezni!!";
    }
}

echo JSON_encode($output, 256);
?>

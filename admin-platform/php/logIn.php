<?php
session_start();
require_once("function.php");
require_once("classBase.php");
require_once("../../php/classLog.php");
if(isset($_GET['logoff']))
{
    Log::upisiLog("../../logs/logovanja.txt", "Uspešna odjava korisnika {$_SESSION['admin_name']}");
    unistiSesiju();
    header("location: ../index.php");
    
}
$db=new Baza();
$db->connect();
$output['error']="";
$output['location']="";
if(isset($_POST["username"]) and isset($_POST["password"]))
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    if(validanString($username) and validanString($password))
    {
        $sql="SELECT * FROM admin_users WHERE admin_email='{$username}'";
        $rez=$db->query($sql);
        if($db->num_rows($rez)==1)
        {
            $red=$db->fetch_object($rez);
            if($password==$red->admin_password)
            {
                napraviSesiju($red);
                Log::upisiLog("../../logs/logovanja.txt", "{$_SESSION['admin_name']} se uspešno ulogovao");
                if($_SESSION['admin_status']=="Administrator")
                {
                    $output['location']="statistics_service.php";  
                }
                elseif($_SESSION['admin_status']=="Serviser")
                {
                    $output['location']="service.php";
                }
                elseif($_SESSION['admin_status']=="Vozač")
                {
                    $output['location']="test_drive.php";
                }
                else
                {
                    $output['location']="statistics_service.php"; 
                }

                
            }
            else
            {
                $output['error']="Nije ispravna lozinka za korisnika ".$username;
                Log::upisiLog("../../logs/logovanja.txt", "Pogrešna lozinka {$username} - otkucana lozinka je {$password}, poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);
            }
        }
        else
        {
            $output['error']="Nije ispravna E-mail adresa za korisnika ".$username;
            Log::upisiLog("../../logs/logovanja.txt", "Pogrešno korisničko ime {$username} - poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);
        }
    }
    else
    {
        $output['error']="E-mail adresa ili lozinka sadrže nedozvoljene karaktere";
        Log::upisiLog("../../logs/logovanja.txt", "Nedozvoljeni karakteri od strane {$username} - poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);
    }
}
else
{
    $output['error']="Svi podaci su obavezni!!";
}
echo JSON_encode($output, 256);
?>

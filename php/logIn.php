<?php
$output['error']="";
$output['location']="";
require_once("classLog.php");
session_start();

//If $_SESSION['time'] is set, then disaloow log in for user for 1 minut
if(isset($_SESSION['time']))
{
    //When 1 minut is passed, unset this sessions
    if(time()-60>$_SESSION['time'])
    {
        unset($_SESSION['time']);
        unset($_SESSION['mistake']);
    }
}

//Show message for users that need to wait 1 minut for login, and stop program for 1 minut
if(isset($_SESSION['mistake']) and $_SESSION['mistake']==5)
{
    $output['error']="Pogrešili ste lozinku ili E-mail više od 5 puta. Potrebno je da sačekate 1 minut!";
    Log::upisiLog("../logs/zabrane.txt", "Korisnik sa IP adrese - ".$_SERVER['REMOTE_ADDR']." je dobio zabranu na 1 minut");

    if(!isset($_SESSION['time']))
    {
       $_SESSION['time']=time(); 
    }
    echo JSON_encode($output, 256);
    exit();  
}

require_once("function.php");
require_once("classBase.php");
if(isset($_GET['logoff']))
{
    Log::upisiLog("../logs/logovanja.txt", "Uspešna odjava korisnika {$_SESSION['users_name']}");
    unistiSesiju();
    header("location: ../Početna");
    
}
$db=new Baza();
$db->connect();
if(isset($_GET['login']));
{
    if($_POST["username"]!="" AND $_POST["password"]!="")
    {
        $salt="UF4Uq2WXAx7b93z7svNZ";
        $username=$_POST["username"];
        $password=$_POST["password"].$salt;
        $pass_hash=md5($password);
        $remember=$_POST['remember'];
        if(validanString($username) and validanString($password))
        {
            $sql="SELECT * FROM users WHERE users_email='{$username}' LIMIT 1";
            $rez=$db->query($sql);
            if($db->num_rows($rez)==1)
            {
                $red=$db->fetch_object($rez);
                if($pass_hash==$red->users_password)
                {
                    napraviSesiju($red->users_id, $red->users_name, $red->users_lastname, $red->users_status, $red->users_email);
                    Log::upisiLog("../logs/logovanja.txt", "{$_SESSION['users_name']} se uspešno ulogovao");
                    $output['location']="Početna";  
                }
                else
                {
                    $output['error']="Nije ispravna E-mail adresa ili lozinka za korisnika ".$username;
                    Log::upisiLog("../logs/logovanja.txt", "Pogrešna lozinka {$username} - otkucana lozinka je {$password}, poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);

                    if(!isset($_SESSION['mistake']))
                    {
                        //Seting $_Session mistake
                        $_SESSION['mistake']=1; 
                    }
                    else
                    {
                        //Counter for $_Session mistake
                        ++$_SESSION['mistake'];
                    }
                }
            }
            else
            {
                $output['error']="Nije ispravna E-mail adresa ili lozinka za korisnika ".$username;
                Log::upisiLog("../logs/logovanja.txt", "Pogrešno korisničko ime {$username} - poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);

                if(!isset($_SESSION['mistake']))
                {
                    //Seting $_Session mistake
                    $_SESSION['mistake']=1; 
                }
                else
                {
                    //Counter for $_Session mistake
                    ++$_SESSION['mistake'];
                }
            }
        }
        else
        {
            $output['error']="E-mail adresa ili lozinka sadrže nedozvoljene karaktere";
            Log::upisiLog("../logs/logovanja.txt", "Nedozvoljeni karakteri pri logovanju - poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);
        }
    }
    else
    {
        $output['error']="Svi podaci su obavezni!!";
    }
}

echo JSON_encode($output, 256);
?>

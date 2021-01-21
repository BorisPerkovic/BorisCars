<?php
function validanString($str)
{
    if(strpos($str, "=")!==false) return false;
    if(strpos($str, "(")!==false) return false;
    if(strpos($str, ")")!==false) return false;
    if(strpos($str, "'")!==false) return false;
    if(strpos($str, "/")!==false) return false;
    if(strpos($str, "|")!==false) return false;
    if(strpos($str, ";")!==false) return false;
    if(strpos($str, ",")!==false) return false;
    if(strpos($str, "<")!==false) return false;
    if(strpos($str, ">")!==false) return false;
    if(strpos($str, "!")!==false) return false;
    if(strpos($str, "$")!==false) return false;
    return true;
}

function login()
{
    if(isset($_SESSION['users_id']) and isset($_SESSION['users_name']) and isset($_SESSION['users_status']))
        return true;
    elseif(isset($_COOKIE['users_id']) and isset($_COOKIE['users_name']) and isset($_COOKIE['users_status']))
    {
        $_SESSION['users_id']=$_COOKIE['users_id'];
        $_SESSION['users_name']=$_COOKIE['users_name'];
        $_SESSION['users_status']=$_COOKIE['users_status'];
        return true;
    }
    else
        return false;
    
}
function unistiSesiju()
{
    session_unset();
    session_destroy();
    setcookie("users_id", "", time()-1,"/");
    setcookie("users_name", "", time()-1,"/");
    setcookie("users_status", "", time()-1,"/");
}
function napraviSesiju($users_id, $users_name, $users_lastname, $users_status, $users_email)
{
    $_SESSION['users_id']=$users_id;
    $_SESSION['users_name']="$users_name $users_lastname";
    $_SESSION['users_status']=$users_status;
    $_SESSION['users_email']=$users_email;
	if(isset($_POST['remember']))
	{
		setcookie("users_id", $users_id, time()+86400,"/");
		setcookie("users_name", "$users_name $users_lastname", time()+86400,"/");
        setcookie("users_status", $users_status, time()+86400,"/");
        setcookie("users_email", $users_email, time()+86400,"/");
	}
}
function validNumber()
{
    $a=["a", "b","c","v","g","j","e","z","y"];
    $b=["A", "B","C","V","G","J","E","Z","Y"];
    $c=["A", "B","C","V","G","J","E","Z","Y"];
    $d=[1,2,3,4,5,6,7,8,9];
    $e=["a", "b","c","v","g","j","e","z","y"];
    $h=[1,2,3,4,5,6,7,8,9];
    $g=["a", "b","c","v","g","j","e","z","y"];
    $valid_number=$a[round(mt_rand(0,count($a)-1))].$b[round(mt_rand(0,count($b)-1))].$c[round(mt_rand(0,count($c)-1))].$d[round(mt_rand(0,count($d)-1))].$e[round(mt_rand(0,count($e)-1))].$g[round(mt_rand(0,count($g)-1))].$h[round(mt_rand(0,count($h)-1))];
    return $valid_number;
}
?>
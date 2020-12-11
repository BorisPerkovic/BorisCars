<?php
function validanString($str)
{
    if(strpos($str, "=")!==false) return false;
    if(strpos($str, " ")!==false) return false;
    if(strpos($str, "(")!==false) return false;
    if(strpos($str, ")")!==false) return false;
    if(strpos($str, "'")!==false) return false;
    if(strpos($str, "/")!==false) return false;
    return true;
}

function login()
{
    if(isset($_SESSION['admin_id']) and isset($_SESSION['admin_name']) and isset($_SESSION['admin_status']))
        return true;
    elseif(isset($_COOKIE['admin_id']) and isset($_COOKIE['admin_name']) and isset($_COOKIE['admin_status']))
    {
        $_SESSION['admin_id']=$_COOKIE['admin_id'];
        $_SESSION['admin_name']=$_COOKIE['admin_name'];
        $_SESSION['admin_status']=$_COOKIE['admin_status'];
        return true;
    }
    else
        return false;
    
}
function unistiSesiju()
{
    session_unset();
    session_destroy();
    setcookie("admin_id", "", time()-1,"/");
    setcookie("admin_name", "", time()-1,"/");
    setcookie("admin_status", "", time()-1,"/");
}
function napraviSesiju($red)
{
    $_SESSION['admin_id']=$red->admin_id;
    $_SESSION['admin_name']="$red->admin_name $red->admin_lastname";
	$_SESSION['admin_status']=$red->admin_status;
	if(isset($remember))
	{
		setcookie("admin_id", $red->admin_id, time()+86400,"/");
		setcookie("admin_name", "$red->admin_name $red->admin_lastname", time()+86400,"/");
	    setcookie("admin_status", $red->admin_status, time()+86400,"/");
	}
}
?>
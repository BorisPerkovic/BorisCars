<?php
$db= mysqli_connect("localhost","root","","rangerover");
if(!$db)
{
    echo "Došlo je do greške prilikom konekcije na bazu podataka".mysqli_connect_error();
    die();
}

//query for load glitch
$sql="SELECT * FROM glitch";
mysqli_query($db, "SET NAMES UTF8");
$res=mysqli_query($db, $sql);
$all=mysqli_fetch_all($res, MYSQLI_ASSOC);
echo JSON_encode($all, 256);


?>
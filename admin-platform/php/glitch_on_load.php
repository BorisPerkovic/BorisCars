<?php
$db= mysqli_connect("localhost","root","","rangerover");
if(!$db)
{
    echo "Došlo je do greške prilikom konekcije na bazu podataka".mysqli_connect_error();
    die();
}

//query for load models, grlitch on admin-nav page
mysqli_query($db, "SET NAMES UTF8");
$res=mysqli_query($db, "SELECT * FROM glitch");
$all=mysqli_fetch_all($res, MYSQLI_ASSOC);
echo JSON_encode($all, 256);

?>
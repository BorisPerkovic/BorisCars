<?php
$db= mysqli_connect("localhost","root","","rangerover");
$date=date("Y-m-d");
if(!$db)
{
    echo "Došlo je do greške prilikom konekcije na bazu podataka".mysqli_connect_error();
    die();
}

//query for load testDriveview data in table on #main
mysqli_query($db, "SET NAMES UTF8");
$res=mysqli_query($db, "SELECT * FROM testdrive_view WHERE testDrive_date='{$date}'");
$all=mysqli_fetch_all($res, MYSQLI_ASSOC);
echo JSON_encode($all, 256);

?>
<?php
require_once("function.php");
require_once("classBase.php");
require_once("classLog.php");
$db=new Baza();
$db->connect();
if(!$db)
{
    echo "Došlo je do greške prilikom konekcije na bazu podataka".mysqli_connect_error();
    die();
}


if(isset($_GET['funkcija']))
{
    $funkcija=$_GET['funkcija'];

    //add service SQL
    if($funkcija=="zakazivanje_servis")
    {
        $name=$_POST['service_name'];
        $lastname=$_POST['service_lastname'];
        $email=$_POST['service_email'];
        $phone=$_POST['service_phone'];
        $model=$_POST['service_model'];
        $glitch=$_POST['service_glitch'];
        $comment=$_POST['service_describe'];
        $date=date("Y-m-d");
        $sql="INSERT INTO services (services_name, service_lastname, service_email, service_phone, service_describe, service_date, models_id, glitch_id) VALUES ('$name', '$lastname', '$email', '$phone', '$comment', '$date', '$model', '$glitch')";
        $db->query($sql);
        echo "Uspešno ste zakazali servis. Naše kolege će Vas pozvati za dalja uputstva!";
        Log::upisiLog("../logs/servisi.txt", "$name $lastname $email je poslao zahtev za servisiranje modela sa ID $model za kvar sa ID $glitch"); 
    }
    
}
?>


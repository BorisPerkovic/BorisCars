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

    //add testDrive SQL
    if($funkcija=="zakazivanje_testDrive")
    {
        $name=$_POST['testDrive_name'];
        $lastname=$_POST['testDrive_lastname'];
        $email=$_POST['testDrive_email'];
        $phone=$_POST['testDrive_phone'];
        $model=$_POST['testDrive_model'];
        $date=date("Y-m-d");
        $testDrive_admin="";
        if(validanString($name) and validanString($lastname) and validanString($email) and validanString($phone))
        {
            $sql="INSERT INTO test_drive (testDrive_name, testDrive_lastname, testDrive_email, testDrive_phone, models_id, testDrive_date, testDrive_admin) VALUES ('{$name}', '{$lastname}', '{$email}', '{$phone}', '{$model}','{$date}','{$testDrive_admin}')";
            $db->query($sql);
            echo "Uspešno ste zakazali test vožnju. Naše kolege će Vas pozvati za dalja uputstva!";
            Log::upisiLog("../logs/test_vožnje.txt", "$name $lastname $email je poslao zahtev za test vožnju modela sa ID $model"); 
        }
        else
        {
            echo "U jednom od polja za unos postoje nedozvoljeni karakteri";
            Log::upisiLog("../logs/test_vožnje.txt", "Nedozvoljeni karakteri pri zakazivanju test vožnje - poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);
        }
         
    }
    
}
?>


<?php
session_start();
require_once("function.php");
require_once("classBase.php");
require_once("../../php/classLog.php");
$db=new Baza();
$db->connect();
$date=date("Y-m-d");
$output="";
if(!$db)
{
    echo "Došlo je do greške prilikom konekcije na bazu podataka".mysqli_connect_error();
    die();
}
?>
<?php
//FILTERS
if(isset($_POST['action']))
{
    $startDate=$_POST['startDate'];
    $endDate=$_POST['endDate'];  
    $query="SELECT * FROM testDrive_view WHERE testDrive_date BETWEEN '$startDate' AND '$endDate' ";
    if(isset($_POST['model']))
    {
        $model= implode("','", $_POST['model']);
        $query .=" AND models_name IN('".$model."')";
    }
    if(isset($_POST['status']))
    {
        $status= implode("','", $_POST['status']);
        $query.="AND serviced IN('".$status."')";
    }
    if(isset($_POST['search']))
    {
        $query.="AND testDrive_email LIKE '%".$_POST['search']."%'";
    }
    $query.="ORDER BY  testDrive_date ASC";
    $rez=$db->query($query);
    $output="";
    if($db->num_rows($rez)!=0)
    {
        while($row=$db->fetch_object($rez))
        {
            $output.="<tr class='linked'>";
            $output.="<th scope='row' data-id='".$row->testDrive_id."' class='td_testDrive'>".$row->testDrive_id."</th>";
            $output.="<td data-id='".$row->testDrive_id."' class='td_testDrive'>".$row->models_name."</td>";
            $output.="<td data-id='".$row->testDrive_id."' class='td_testDrive'>".$row->testDrive_date."</td>";
            $output.="<td data-id='".$row->testDrive_id."' class='td_testDrive'>".$row->serviced."</td>";
            $output.="</tr>";
        }
        $output.="<tr>";
        $output.="<td colspan='5' text-left id='td_data'>Broj prikazanih rezultata za period od <b>".$startDate."</b> do <b>".$endDate."</b> je: <b>".$db->num_rows($rez)."</b></td>";
        $output.="</tr>";
        
    }
    echo $output;
}

if(isset($_GET['funkcija']))
{
    $function=$_GET['funkcija'];

    //FUNCTION FOR RIGHT PART DATA ON testDrive statistics PAGE
    if($function=="right_part")
    {
        $service_id=$_POST['service_id'];
        $sql="SELECT * FROM testDrive_view WHERE testDrive_id='$service_id'";
        $res=$db->query($sql);
        $output="";
        if($db->num_rows($res)!=0)
        {
            while($row=$db->fetch_object($res))
            {
                $output.="<p><b>Broj test vožnje:</b> <span id='testDrive_number'>".$row->testDrive_id."</span></p>";
                $output.="<p><b>Ime:</b> ".$row->testDrive_name."</p>";
                $output.="<p><b>Prezime:</b> ".$row->testDrive_lastname."</p>";
                $output.="<p><b>E-mail:</b> ".$row->testDrive_email."</p>";
                $output.="<p><b>Broj telefona:</b> ".$row->testDrive_phone."</p>";
                $output.="<p><b>Model:</b> ".$row->models_name."</p>";
                $output.="<p><b>Datum zahteva:</b> ".$row->testDrive_date."</p>";
                $output.="<p><b>Status:</b> ".$row->serviced."</p>";
                $output.="<p><b>Vozač:</b> ".$row->testDrive_admin."</p>";
                $output.="<p><b>Datum vožnje:</b> ".$row->date_of_testDrive."</p>";
            }
            
        }
        echo $output;
    }
}
?>
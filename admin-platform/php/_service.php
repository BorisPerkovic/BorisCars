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
    $query="SELECT * FROM service_view WHERE service_date BETWEEN '$startDate' AND '$endDate' ";
    if(isset($_POST['model']))
    {
        $model= implode("','", $_POST['model']);
        $query .=" AND models_name IN('".$model."')";
    }
    if(isset($_POST['glitch']))
    {
        $glitch= implode("','", $_POST['glitch']);
        $query.="AND glitch_name IN('".$glitch."')";
    }
    if(isset($_POST['status']))
    {
        $status= implode("','", $_POST['status']);
        $query.="AND serviced IN('".$status."')";
    }
    if(isset($_POST['search']))
    {
        $query.="AND service_email LIKE '%".$_POST['search']."%'";
    }
    $query.="ORDER BY  service_date ASC";
    $rez=$db->query($query);
    $output="";
    if($db->num_rows($rez)!=0)
    {
        while($row=$db->fetch_object($rez))
        {
            $output.="<tr class='linked'>";
            $output.="<th scope='row' data-id='".$row->service_id."' class='td_service'>".$row->service_id."</th>";
            $output.="<td data-id='".$row->service_id."' class='td_service'>".$row->models_name."</td>";
            $output.="<td data-id='".$row->service_id."' class='td_service'>".$row->glitch_name."</td>";
            $output.="<td data-id='".$row->service_id."' class='td_service'>".$row->service_date."</td>";
            $output.="<td data-id='".$row->service_id."' class='td_service'>".$row->serviced."</td>";
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

    //FUNCTION FOR RIGHT PART DATA ON SERVICE PAGE
    if($function=="right_part")
    {
        $service_id=$_POST['service_id'];
        $sql="SELECT * FROM service_view WHERE service_id='$service_id'";
        $res=$db->query($sql);
        $output="";
        if($db->num_rows($res)!=0)
        {
            while($row=$db->fetch_object($res))
            {
                $output.="<p><b>Broj servisa:</b> <span id='service_number'>".$row->service_id."</span></p>";
                $output.="<p><b>Ime:</b> ".$row->services_name."</p>";
                $output.="<p><b>Prezime:</b> ".$row->service_lastname."</p>";
                $output.="<p><b>E-mail:</b> ".$row->service_email."</p>";
                $output.="<p><b>Broj telefona:</b> ".$row->service_phone."</p>";
                $output.="<p><b>Model:</b> ".$row->models_name."</p>";
                $output.="<p><b>Kvar:</b> ".$row->glitch_name."</p>";
                $output.="<p><b>Datum zahteva:</b> ".$row->service_date."</p>";
                $output.="<p><b>Status:</b> ".$row->serviced."</p>";
                $output.="<p><b>Serviser:</b> ".$row->service_admin."</p>";
                $output.="<p><b>Datum servisiranja:</b> ".$row->date_of_service."</p>";
                $output.="<p><b>Opis kvara:</b> ".$row->service_describe."</p>";
                if($row->serviced=="Na čekanju")
                {
                   $output.="<p><button class='btn' id='accept_service'>Prihvati servis</button> | <button class='btn' id='deny_service'>Odbaci servis</button></p>"; 
                }
                
            }
            
        }
        echo $output;
    }

    //FUNCTION FOR RIGHT PART DATA ACCEPTING SERVICE
    if($function=="accept_service")
    {
        $service_id=$_POST['service_number'];
        $user=$_SESSION['admin_name'];
        $sql="UPDATE services SET serviced='Servisiran', service_admin='$user' WHERE service_id='$service_id'";
        $db->query($sql);
        Log::upisiLog("../../logs/servisi.txt", "$user je prihvatio servis modela sa ID $service_id");
    }

    //FUNCTION FOR RIGHT PART DATA DENY SERVICE
    if($function=="deny_service")
    {
        $service_id=$_POST['service_number'];
        $user=$_SESSION['admin_name'];
        $sql="UPDATE services SET serviced='Odbijen', service_admin='$user' WHERE service_id='$service_id'";
        $db->query($sql);
        Log::upisiLog("../../logs/servisi.txt", "$user je odbacio servis modela sa ID $service_id");
    }
}

?>
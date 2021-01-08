<?php
session_start();
require_once("php/function.php");
require_once("php/classBase.php");
require_once("php/classLog.php");
$db=new Baza();
$db->connect();
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="icon" href="pics/logo1.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="jscript/config.js"></script>

    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/icons/all.min.css" rel="stylesheet">

    <title>DEFENDER</title>
</head>
<body>

<?php
/*------------------------
    INCLUDING NAVBAR
-------------------------*/
    include("php/navbar.php");
?>

<!----------------------------
 AUTOBIOGRAPHY HERO 1 SECTION
------------------------------>
<div class="container-fluid" id="hero1_autobiography">

    <img src="pics/defender1.jpg" class="img-fluid" alt="Responsive image">

</div>


<!------------------------
    CENTRAL HEADING 1
-------------------------->
<div class="container-fluid central_models1">

    <div class="row">

        <div class="col-md-12 text-center">
			<h1>TEHNOLOGIJE</h1>
        </div>

    </div>


</div>

<!------------------------
    HERO2 SECTION
-------------------------->

<div id="defender_parallax" class="container-fluid parallax-section">

</div>


<!------------------------
    CENTRAL HEADING 2
-------------------------->
<div class="container-fluid central_models2">

    <div class="row">

        <div class="col-md-12 text-center">
			<h1>ENTERIJER</h1>
        </div>

    </div>


</div>


<!----------------------
    MAIN SECTION
----------------------->
<div class="container-fluid models_main" >

<div class="container">
    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/defenderin1.jpg" class="img-fluid" alt="Responsive image">
            <h5>ALPSKA SVETLA</h5>
			<p>Kao oda prošlosti, ova svetla pomažu da se kabina osvetli i daju vozilu poseban šarm.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/defenderin2.jpg" class="img-fluid" alt="Responsive image">
            <h5>UDOBNOST I PRAKTIČNOST</h5>
			<p>Uz Clear Sight tehnologiju, koja je uključena kao deo paketa 3D kružne kamere, vidljivost vašeg vozila kao i vaš pregled druma biće znatno unapređeni.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/defenderin3.jpg" class="img-fluid" alt="Responsive image">
            <h5>VRHUNSKO OSVETLJENJE UNUTAR KABINE VOZILA</h5>
            <p>Premium osvetljenje daje mogućnost podešavanja rasvete u 10 opcija tako da vaše okruženje mođete uskladiti sa trenutnim raspoloženjem ili stilom vožnje.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/defenderin4.jpg" class="img-fluid" alt="Responsive image">
            <h5>HGREJANJE I HLAĐENJE VAZDUHA</h5>
			<p>Pored toga što vozilu pružaja dodatni komfor, funkcija grejanja i hlađenja sediđta obezbeđuje optimalnu sredinu za boravak na svakom putovanju.</p>
        </div>

    </div>
</div>
    


</div>

<!------------------------
    CENTRAL HEADING 2
-------------------------->
<div class="container-fluid central_models2">

    <div class="row">

        <div class="col-md-12 text-center">
            <h1>PERSONALIZACIJA</h1>
        </div>

    </div>


</div>




<!----------------------
    MAIN SECTION
----------------------->
<div class="container-fluid models_main" >

<div class="container">
    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/defenderper.jpg" class="img-fluid" alt="Responsive image">
            <h5>TESTIRANJE</h5>
			<p>Defender je konstruisan da izdrži ekstremne uslove i ponavljajuće izazove.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/defenderper1.jpg" class="img-fluid" alt="Responsive image">
            <h5>FRONTALNI UNDERSHIELD (PODVLAKA)</h5>
			<p>Krećite se sigurno gde god da idete, donji sloj Vas štiti od opasnih terena ispod vas.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/defenderper3.jpg" class="img-fluid" alt="Responsive image">
            <h5>CHEQUER ZAŠTITNA OPREMA</h5>
			<p>Uživajte u svojoj avanturi bez brige da ćete oštetiti spoljnu farbu na vozilu. Ovaj komplet poseduje dodatnu zaštitu za Defender-ov eksterijer.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/defenderrper5.jpg" class="img-fluid" alt="Responsive image">
            <h5>ZAŠTITNA ŠIPKA U OBLIKU SLOVA "A"</h5>
			<p>Povećava zaštitu od oštećenja na prednjem delu Defender-a, kao i poboljšanje izgleda vozila.</p>
        </div>

    </div>
</div>
    


</div>


<?php
/*------------------------
    INCLUDING FOOTER
-------------------------*/
    include("php/footer.php");

?>


</body>
</html>
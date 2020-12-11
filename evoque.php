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

    <title>EVOQUE</title>
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

    <img src="pics/evoque1.jpg" class="img-fluid" alt="Responsive image">

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

<div id="evoque_parallax" class="container-fluid parallax-section">

</div>


<!------------------------
    CENTRAL HEADING 2
-------------------------->
<div class="container-fluid central_models2">

    <div class="row">

        <div class="col-md-12 text-center">
			<h1>INOVATIVNOST</h1>
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
            <img src="pics/evoquein1.jpg" class="img-fluid" alt="Responsive image">
            <h5>INFOTAINMENT</h5>
            <p>Pružajući mnoštvo informacija i zabave, Range Rover Evoque koristi naš najsavremeniji InControl infotainment sistem - Touch Pro, kao deo standardnog paketa opreme. Ovaj sistem besprekorno povezuje Vas i vaše vozilo sa ostatkom sveta.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/evoquein2.jpg" class="img-fluid" alt="Responsive image">
            <h5>INOVATIVNI RETROVIZOR</h5>
            <p>Unutrašnji retrovizor za jasan pregled saobraćaja iza vas i monitor za jasan pregled terena po kome se krećete predstavljaju jedinstvene funkcije za brend Land Rover. Ove funkcije obezbeđuju jasnu liniju pregleda u normalno obstruisanim uslovima, pružaju veći nivo samopouzdanja u vandrumskoj tj. terenskoj vožnji ili pri izazovnim uslovima gradske vožnje.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/evoquein3.jpg" class="img-fluid" alt="Responsive image">
            <h5>POMOĆNE FUNKCIJE ZA VOZAČA</h5>
            <p>Počev od savlađivanja gustog gradskog saobraćaja do obezbeđivanja dodatne bezbednosti, na raspolaganju Vam je čitavo mnoštvo inovativnh tehnologija dostupnih kao deo standardnog ili dodatnog paketa opreme ili u okviru nekog anmenskog paketa. Svaka funkcija je dizajnirana i kreirana kako bi podržala užitak u vožnji koji Range Rover Evoque pruža.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/evoquein4.jpg" class="img-fluid" alt="Responsive image">
            <h5>ERBEGOVI</h5>
            <p>Sveobuhvatni sistem erbegova za vozača, putnike i pešaka na modelu Range Rover Evoque obezbeđuje izvanrednu zaštitu za sve korisnike vozila.</p>
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
            <h1>PERFORMANSE</h1>
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
            <img src="pics/evoqueper.jpg" class="img-fluid" alt="Responsive image">
            <h5>SISTEM VOŽNJE</h5>
            <p>Range Rover Evoque koristi najsavremenije bezbednosne tehnologiji, kao što je na primer elektronska distribucija snage kočenja (EBD), koja automatski koriguje kočionu silu u svakom uglu kako bi se minimizirala razdaljina do zaustavljanja vozila , pri čemu se jednako vodi računa o održavanju stabilnosti i sposobnosti vozila da vrši upravljanje.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/evoqueper1.jpg" class="img-fluid" alt="Responsive image">
            <h5>KONTROLA DINAMIČKE STABILNOSTI</h5>
            <p>Smanjuje obrtni momenat motora i primenjuje kočenje na odgovarajućim točkovima kako bi se korigovao pravac kretanja vozila suprotnim delovanjem na podupravljanje ili preupravljanje (preupravljanje ili engleski oversteer znaci kada automobil skrece vise nego sto mu je dat input od strane upravljaca odnosno vozaca, odnosno kada bezi rep auta. Podupravljanje ili understeer je upravo suprotna situacija, kad nos vozila bezi iz krivine).</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/evoqueper2.jpg" class="img-fluid" alt="Responsive image">
            <h5>ON-ROAD</h5>
            <p>Savršena ravnoteža između mogućnosti moćnih performansi i preciznosti na putu čini Range Rover Evoque vozilom koje pruža neverovatnu radost u vožnji. Sa skupom tehnologija, uključujući adaptivni integralni pogon Active Driveline i Adaptive Dinamics, Range Rover Evoque isporučuje uzbudljivu vožnju, bez obzira na vrstu druma ili na vremenske uslove.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/evoqueper3.jpg" class="img-fluid" alt="Responsive image">
            <h5>OFF-ROAD</h5>
            <p>Kombinujući prefinjenost sa lakoćom vožnje u terenskim uslovima, Range Rover Evoque čini vožnju u ekstremnim uslovima sasvim lakom uz pomoć sistema Terrain Response 2* (sistem koji prilagođava rad motora, menjača, diferencijala i šasije prema uslovima vožnje), zatim Wade Sensing sistema sa senzorima u retrovizorima, koji obaveštava vozača o dubini vode kroz koju prolazi vozilo i asistencijom za kontrolu kretanja niz nagibe.</p>
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
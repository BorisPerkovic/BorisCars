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

    <title>DISCOVERY</title>
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
<section class="container-fluid" id="hero1_autobiography">

    <img src="pics/discovery1.jpg" class="img-fluid" alt="Responsive image">

</section>


<!------------------------
    CENTRAL HEADING 1
-------------------------->
<section class="container-fluid central_models1">

    <div class="row">

        <div class="col-md-12 text-center">
			<h1>TEHNOLOGIJE</h1>
        </div>

    </div>


</section>

<!------------------------
    HERO2 SECTION
-------------------------->

<section id="discovery_parallax" class="container-fluid parallax-section">

</section>


<!------------------------
    CENTRAL HEADING 2
-------------------------->
<section class="container-fluid central_models2">

    <div class="row">

        <div class="col-md-12 text-center">
			<h1>ENTERIJER</h1>
        </div>

    </div>


</section>


<!----------------------
    MAIN SECTION
----------------------->
<section class="container-fluid models_main" >

<article class="container">
    <div class="row">

        <article class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/discoverzin1.jpg" class="img-fluid" alt="Responsive image">
            <h5>INFORMACIJE</h5>
            <p>U ovom vozilu korišćene su najsavremenije infotainment tehnologije kako bi se korisnicima pružio najviši nivo performansi, konektivnosti i informisanja. U ovom vozilu imate čitav svet na dlanu – počev od izbora Meridian™ audio sistema ,zatim inovacija poput multimedijalnog sistema navigacije Touch Pro, pa sve do sistema zabave na zadnjem sedištu (Rear Seat Entertainment System).</p>
        </article>
        <article class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/discoverzin2.jpg" class="img-fluid" alt="Responsive image">
            <h5>UDOBNOST I PRAKTIČNOST</h5>
			<p>Sa sedam sedišta u tri reda, podesivim sedenjem i opcionim funkcijama grejanja, hlađenja i masaže – kako god da konfigurišete prostor u novom Discovery modelu, imaćete dovoljno mesta da se opustite.</p>
        </article>
        <article class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/discoverzin3.jpg" class="img-fluid" alt="Responsive image">
            <h5>PRO SERVICES I WI-FI HOTSPOT</h5>
            <p>Kao deo tehnologije Connect Pro, Pro Services obuhvata Wi-Fi Hotspot kao i niz priključenih navigacionih karakteristika, poput informacija o saobraćaju u realnom vremenu, dostupnost parking mesta u realnom vremenu (uključujući i cene parkiranja, tamo gde je to dostupno) i fotografije ulica. Uz pomoć aplikacije za pametne telefone InControl Route Planner, vašem vozilu možete direktno sa telefona zadati destinacije kuda će se vozilo kretati, ili, kada parkirate vozilo, pristupiti smernicama kretanja javnog prevoza ili pešačkih ruta do željenog odredišta.</p>
        </article>
        <article class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/dicsoveryin4.jpg" class="img-fluid" alt="Responsive image">
            <h5>HUD DISPLEJ</h5>
			<p>Head-up displaz (HUD) opcija prikazuje ključne podatke o vozilu poput brzine kretanja, pozicije menjača i pravca navigacije na vetrobranskom staklu. U njemu je prikazana grafika visoke rezolucije i u njenoj punoj boji. Ona omogučava lako pregledavanje relevantnih informacija.</p>
        </article>

    </div>
</article>
    
</section>

<!------------------------
    CENTRAL HEADING 2
-------------------------->
<section class="container-fluid central_models2">

    <div class="row">

        <div class="col-md-12 text-center">
            <h1>PERFORMANSE</h1>
        </div>

    </div>


</section>




<!----------------------
    MAIN SECTION
----------------------->
<section class="container-fluid models_main" >

<article class="container">
    <div class="row">

        <article class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/discoveryper.jpg" class="img-fluid" alt="Responsive image">
            <h5>PERFORMANSE NA PUTU</h5>
			<p>Discovery je dizajniran tako da obezbeđuje samouverenu, udobnu i uzbudljivu vožnju,takvu da kilometri prolaze gotovo nezapaženo. Dinamička kontrola sigurnosti i elektronski servo upravljač (Electronic Power Assisted Steering, EPAS) obezbeđuju da vozilo razvije svoje najbolje performanse na putu i istovremeno unapređuju kvalitet vožnje.</p>
        </article>
        <article class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/discoveryper1.jpg" class="img-fluid" alt="Responsive image">
            <h5>MOTOR</h5>
			<p>Discovery isporučuje snažne performanse zahvaljujući liniji naprednih rafiniranih i efikasnih benzin i dizel motora. Naš napredni 2.0-litarski Ingenium motor je prvi 4-cilindarski dizel koji će se u punoj veličini koristi u Land Roveru.</p>
        </article>
        <article class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/discoveryper2.jpg" class="img-fluid" alt="Responsive image">
            <h5>OFF-ROAD PERFORMANSE</h5>
			<p>Svestrane terenske sposobnosti ovog vozila, uz mogućnost kretanja po vodenim površinama pomoću opcionog senzora za gaženje, kao i čitav niz ostalih karakteristika kao sto je npr Terrain Response 2, garantuju da će vaše novo Discovery vozilo uvek biti spremno da se uputi gde god zamislite.</p>
        </article>
        <article class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/discoveryper3.jpg" class="img-fluid" alt="Responsive image">
            <h5>FUNKCIJE ZA POMOĆ VOZAČU</h5>
			<p>Discovery daje vozaču bogatsvo izbora pomoćnih funkcija,u cilju unapređenja bezbednosti samog vozača kao i putnika koji se prevoze. Ova pomagala otelotvoruju najsavremenije inženjerske i motorne tehnologije, i sigurno će vam pomoći da sa lakoćom upravljate vozilom u svim uslovima saobraćaja, na autoputu, običnom drumu čak i u noćnoj vožnji.</p>
        </article>

    </div>
</article>
    
</section>


<?php
/*------------------------
    INCLUDING FOOTER
-------------------------*/
    include("php/footer.php");

?>


</body>
</html>
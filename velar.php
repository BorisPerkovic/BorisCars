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

    <title>VELAR</title>
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

    <img src="pics/velar1.jpg" class="img-fluid" alt="Responsive image">

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

<div id="velar_parallax" class="container-fluid parallax-section">

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
            <img src="pics/velarin1.jpg" class="img-fluid" alt="Responsive image">
            <h5>INTERAKTIVNI DISPLEJ ZA VOZAČA</h5>
            <p>Sa izuzetno oštrom rezolucijom ,ovaj sistem koristi opcioni interaktivni dispej za vozača od 12.3 inča.Možete uspostaviti interakciju sa ovim displejom i kontrolisati medije, upućivati i primati telefonske pozive, itd. U mogućnosti ste da izaberete tri različite postavke ekrana : Dual Dial, Single Dial ili Extended.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/velarin2.jpg" class="img-fluid" alt="Responsive image">
            <h5>TOUCH PRO DUO</h5>
            <p>Touch Pro Duo,naš novi Touchscreen sistem koji dolazi kao deo standardne opreme,omogućava korisniku da istovremeno vidi više funkcija odjednom. Na primer,možete koristiti navigacioni sistem u gornjem ekranu dok su na donjem ekranu prikazani medijski sadržaji.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/velarin3.jpg" class="img-fluid" alt="Responsive image">
            <h5>ZABAVA NA ZADNJEM SEDIŠTU</h5>
            <p>Ovaj opcioni sistem koristi dva ekrana od 8-inča u naslonima za glavu,na kojima mogu da se gledaju filmovi i Tv kanali,uključujući i digitalne kanale. Svaki ekran se nezavisno kontroliše.Sistem ima dva USB 3.0 porta,jedan HDMI i Mobile High-Definition Link koji podržava većinu pametnih telefona,tableta i drugih uredjaja. Na raspolaganju su vam i dva seta WhiteFire slušalica i bežični daljinski upravljač.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/velarin4.jpg" class="img-fluid" alt="Responsive image">
            <h5>KONFIGURACIJE AMBIJENTALNOG OSVETLJENJA</h5>
            <p>Ova izborna funkcija vam omogućava da menja boju i nijansu,menja ambijent kabine i da je prilagodi vašem raspoloženju.Postoji ukupno deset boja.</p>
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
            <img src="pics/velarper1.jpg" class="img-fluid" alt="Responsive image">
            <h5>PREBACIVANJE SILE NA TOČKOVE KOJE IMAJU BOLJI KONTAKT SA POVRŠINOM (PODLOGOM)</h5>
            <p>Na klizavom terenu,kao što su trava i sneg,obrtni moment može biti uravnotežen izmedju prednji i zadnjih točkova kako bi bila maksimalna vuča.U ektremnim uslovima gde samo prednji točkovi imaju vuču,do 100% snaga motora može biti distribuirana na prednje točkove.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/velarper2.jpg" class="img-fluid" alt="Responsive image">
            <h5>ELEKTRONSKA SUSPENZIJA</h5>
            <p>Najsavremeniji sistem elektronske suspenzije pneumatika na sva četiri ugla obezbeđuje izuzetnu artikulaciju točkova i unapređujue stabilnost vozila. Sposoban da savlada najteže situacije, ovaj sistem je projektovan tako da održava Range Rover Velar vozilo u stabilnom stanju bez obzira na to koliko grub teren po kome se vozilo kreće. Za kvalitet vožnje bez presedana, sistem besprekorno podešava visine kada je to neophodno. *Ugrađen kao deo standardne opreme za D300 i P380, opciono na D180, D240, i P300 pogonskom sistemu</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/velarper4.jpg" class="img-fluid" alt="Responsive image">
            <h5>HDC SISTEM - POMOĆ PRI VELIKOM NAGIBU</h5>
            <p>HDC je deo standardne opreme na svim land rover vozilima održavanjem konstantne brzine i nezavisnim kočenjem na svakom točku, HDC sistem mogućava vozaču da se kontrolisano spušta preko neravnog terena sa jakim nagibom. Hill Start Assist (asistencija pri kretanju na uzbrdici), koja dolazi kao deo standardne opeme,osigurava da vozilo ne krene unazad jer započinje kretanje na uzbrdici.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <img src="pics/velarper3.jpg" class="img-fluid" alt="Responsive image">
            <h5>TERRAIN RESPONSE</h5>
            <p>Standardni Range Rover Velar model, Terrain Response omogućava vozaču da optimizuje rad motora, transmisiju (prenos brzina), centralni diferencijal i šasiju kako bi izašao u susret zahtevima terena,izborom jednog od lako prepoznatljivog režima vožnje.Terrain Response 2 automatski prati trenutne uslove vožnje i sistematično bira najpodesnija podešavanja za teren po kome se vozilo kreće.</p>
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
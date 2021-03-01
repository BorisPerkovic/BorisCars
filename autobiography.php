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

    <title>AUTOBIOGRAPHY</title>
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

    <img src="pics/autobiography1.jpg" class="img-fluid" alt="Responsive image">

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

<section id="autobiography_parallax" class="container-fluid parallax-section">

</section>


<!------------------------
    CENTRAL HEADING 2
-------------------------->
<section class="container-fluid central_models2">

    <div class="row">

        <div class="col-md-12 text-center">
			<h1>INOVATIVNOST</h1>
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
        <img src="pics/autobiographyin4.jpg" class="img-fluid" alt="Responsive image">
        <h5>PIXEL-LASER LED FAROVI</h5>
        <p>Pixel-laser LED farovi sa potpisnim dnevnim svetlima obezbeđuju vrhunsku rasvetu, pri čemu laser tehnologija daje pet puta veće osvetljenje u odnosnu na standardne LED farove. Proizvodi se jasno svetlo koje obasjava razdaljinu dužine veće od pola kilometra. Pixel LED farovi dolaze kao deo standardne opreme.</p>
    </article>
    <article class="col-lg-6 col-md-6 col-sm-6 col-6">
        <img src="pics/autobiograpyin1.jpg" class="img-fluid" alt="Responsive image">
        <h5>VOLAN</h5>
        <p>Volan ima prekidače koji su skriveni dok se ne upale i koji su osetljivi na dodir.Jedan od ovih prekidača može se programirati,tako da se personalizuje prema vašim preferencijama kako bi se ostvario niz funkcija.</p>
    </article>
    <article class="col-lg-6 col-md-6 col-sm-6 col-6">
        <img src="pics/autobiographyin2.jpg" class="img-fluid" alt="Responsive image">
        <h5>ZABAVA NA ZADNJEM SEDIŠTU</h5>
        <p>Opcioni sistem zabave na zadnjem sedištu (Rear Seat Entertainment) dolazi uz dva osmoinčna ekrana na dodir,ugradjenih u zadnju stranu prednjeg naslona za glavu ili deseto inčni ekran osetljiv na dodir visoke rezolucije.Sistem je opremljen bežičnim slušalicama i daljinskim upravljačem,USB i HDMI ulazima za podršku više uredjaja.</p>
    </article>
    <article class="col-lg-6 col-md-6 col-sm-6 col-6">
        <img src="pics/autobiographyin3.jpg" class="img-fluid" alt="Responsive image">
        <h5>INCONTROL APLIKACIJE</h5>
        <p>InControl Apps predstavlja optimizovan i interaktivni skup aplikacija koje omogućavaju praćenje medija, usluge zasnovane na jednoj ili više lokacija-preko USB porta.</p>
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
            <h1>PAKETI ZA POMOĆ VOZAČU</h1>
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
        <img src="pics/autobiographyper.jpg" class="img-fluid" alt="Responsive image">
        <h5>UPOZORENJE PRILIKOM PRELASKA SAOBRAĆAJNE TRAKE</h5>
        <p>Ova funkcija vam pomaže da duga putovanja prođu mnogo, mnogo bezbednije. Sistem prepoznaje kada vozilo nenamerno prelazi saobraćajnu traku u okviru koje se kreće i obaveštava vozača vizuelnim upozorenjem i vibracijom volana.</p>
    </article>
    <article class="col-lg-6 col-md-6 col-sm-6 col-6">
        <img src="pics/autobiographyper1.jpg" class="img-fluid" alt="Responsive image">
        <h5>KOČENJE U HITNIM SLUČAJEVIMA</h5>
        <p>Ukoliko se detektuje potencijalni sudar napred, na displeju se prikazuje upozorenje, i time se vozaču daje na znanje da reaguje. Ukoliko vozač ne reaguje, sistem sam koči kako bi umanjio ozbiljnost mogućeg sudara.</p>
    </article>
    <article class="col-lg-6 col-md-6 col-sm-6 col-6">
        <img src="pics/autobiographyper2.jpg" class="img-fluid" alt="Responsive image">
        <h5>ASISTENCIJA PRI PARKIRANJU NAPRED I POZADI</h5>
        <p>Ova funkcija će vam pomoći da se sigurnije parkirate u uzanim prostorima. Kada na menjaču selektujete rikverc, aktiviraju se senzori u zadnjim bamperima. Dok se parkirate, slika na ekranu na dodir kao i zvučni signali nagoveštavaju koliko ste daleko od prepreka.</p>
    </article>
    <article class="col-lg-6 col-md-6 col-sm-6 col-6">
        <img src="pics/autobiographyper3.jpg" class="img-fluid" alt="Responsive image">
        <h5>TEMPOMAT I LIMITER BRZINE</h5>
        <p>Tempomat i limiter brzine održavaju trenutnu brzinu kretanja bez podrebe za kontinuiranom upotrebom pedale akceleratora (gasa), što pomaže da se spreči umor vozača. Limiter brzine takođe omogućava da se maksimalna brzina kretanja vozila podesi unapred.</p>
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

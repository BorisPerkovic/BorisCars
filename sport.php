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

    <title>SPORT</title>
</head>
<body>

<?php
/*------------------------
    INCLUDING NAVBAR
-------------------------*/
    include("php/navbar.php");
?>

<!----------------------------
 SPORT HERO 1 SECTION
------------------------------>
<section class="container-fluid" id="hero1_autobiography">

    <img src="pics/sport1.jpg" class="img-fluid" alt="Responsive image">

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

<section id="sport_parallax" class="container-fluid parallax-section">

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
                <img src="pics/sportin1.jpg" class="img-fluid" alt="Responsive image">
                <h5>MERIDIAN AUDIO SISTEM</h5>
                <p>Meridian vam dopušta da osetite ritam muzike uz izuzetno definisan zvuk- kristalno jasne visoke tonove i pune, duboke basove. Zvuk se isporučuje kroz pažljivo 13 izabranih zvučnika uključujući i dvokanalni SUBWOOVER.</p>
            </article>
            <article class="col-lg-6 col-md-6 col-sm-6 col-6">
                <img src="pics/sportin2.jpg" class="img-fluid" alt="Responsive image">
                <h5>PREPOZNAVANJE GLASA</h5>
                <p>InControl sistem za prepoznavanje glasa razume govorne instrukcije kako biste mogli da komunicirate sa vašim vozilom i aplikacijama,da uputite poziv ili da izaberete muzičku numeru,bez gubitka koncentracije pri vožnji.</p>
            </article>
            <article class="col-lg-6 col-md-6 col-sm-6 col-6">
                <img src="pics/sportin3.jpg" class="img-fluid" alt="Responsive image">
                <h5>PRO USLUGE</h5>
                <p>Pro Services pružaju informacije o protoku saobraćaja u realnom vremenu i obezbeđuju navigaciju "od vrata do vrata", tj od tačke A do tačke B.</p>
            </article>
            <article class="col-lg-6 col-md-6 col-sm-6 col-6">
                <img src="pics/sportin4.jpg" class="img-fluid" alt="Responsive image">
                <h5>PROTECT</h5>
                <p>Koristite Protect kako bi snimili putovanja, na daljinu proverili nivo goriva, sa lakoćom pronašli parkirano vozilo ili proverili da niste ostavili možda otvoren prozor. Ova usluga uključuje i funkciju Optimised Land Rover Assistance (optimizovana Land Rover asistencija).</p>
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
                <img src="pics/sportper.jpg" class="img-fluid" alt="Responsive image">
                <h5>ELEKTRONSKI AKTIVNI DIFERENCIJAL I SISTEM KOJI USPORAVA OKRETANJE UNUTRAŠNIH TOČKOVA U KRIVINAMA (TORQUE VECTORING)</h5>
                <p>Torque Vectoring obezbeđuje responsivno, kontrolisano kretanje u krivinama i omogućava lako savladavanje čak i najizazovnijih krivina. Prilikom skretanja, elektronski diferencijal i kočioni sistem u vozilu konstantno vrše ravnomernnu distribuciju obrtnog momenta između sva 4 točka.</p>
            </article>
            <article class="col-lg-6 col-md-6 col-sm-6 col-6">
                <img src="pics/sportper1.jpg" class="img-fluid" alt="Responsive image">
                <h5>DINAMIČKA KONTROLA STABILNOSTI (DSC)</h5>
                <p>Ova funkcija prati dinamično ponašanje modela Range Rover Sport i interveniše kako bi se postigla maksimalna stabilnost vozila. Dinamička kontrola stabilnosti smanjuje obrtni momenat motora i primenjuje odgovarajuće kočenje kako bi korigovala smer kretanja vozila.</p>
            </article>
            <article class="col-lg-6 col-md-6 col-sm-6 col-6">
                <img src="pics/sportper2.jpg" class="img-fluid" alt="Responsive image">
                <h5>UMANJENJE BRZINE</h5>
                <p>Sistem za smanjenje brzine (Speed Lowering)* koristi elektronsku suspenziju vazduha kako bi se smanjio aerodinamični zastoj i potrošnja goriva pri kretanju u većim brzinama tako što se vozilo spušta za 15mm od normalne visine kada dostigne brzinu kretanja od 105km/h.</p>
            </article>
            <article class="col-lg-6 col-md-6 col-sm-6 col-6">
                <img src="pics/sportper3.jpg" class="img-fluid" alt="Responsive image">
                <h5>DINAMIČAN PROGRAM</h5>
                <p>Vozila koja imaju oba sistema, Terrain Response 2 kao i Elektronski activni diferencijal, dobijaju platformu za dodatna podešavanja - tzv. Dinamički program, koji vrši podešavanja suspenzije kako bi se ostvarila bolja kontrola vozila uz lakše upravljanje</p>
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
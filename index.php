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

    <title>Početna</title>
</head>
<body>

<?php
/*------------------------
    INCLUDING NAVBAR
-------------------------*/
    include("php/navbar.php");
?>


<!------------------------
    CAROUSEL SECTION
-------------------------->

<div class="container-fluid carousel">

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="carousel/carousel1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h3>Range Rover Evoque</h3>
            <h5>Vreme je da donesete odluku o prepoznatljivosti</h5>
        </div>
        </div>
        <div class="carousel-item">
        <img src="carousel/carousel2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h3>Range Rover Velar</h3>
            <h5>Spreman za moćne stvari</h5>
        </div>
        </div>
        <div class="carousel-item">
        <img src="carousel/carousel3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h3>Range Rover Autobiography</h3>
            <h5>Vrhunac prefinjene sposobnosti</h5>
        </div>
        </div>
        <div class="carousel-item">
        <img src="carousel/carousel4.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h3>Range Rover Sport</h3>
            <h5>Najokretniji, najdinamičniji i najposlušniji Land Rover ikada napravljen</h5>
        </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>

</div>


<!------------------------
    CENTRAL HEADING 1
-------------------------->

<div class="container-fluid central1">

    <div class="row">

        <div class="col-md-12 text-center">
			<h1>PORODICA RANGE ROVER VOZILA</h1>
			<p>Zaostavština bez premca.</p>
        </div>

    </div>


</div>

<!------------------------
    HERO SECTION
-------------------------->

<div id="hero" class="container-fluid parallax-section">

</div>


<!------------------------
    CENTRAL HEADING 2
-------------------------->

<div class="container-fluid central2">

    <div class="row">

        <div class="col-md-12 text-center">
			<h1>NAŠA VOZILA</h1>
			<p>Upoznajte porodicu Land Rover automobila</p>
        </div>

    </div>


</div>


<!------------------------
    MAIN WITH CARDS
-------------------------->
<main id="main">

<div class="container">

   <div class="row">

            <!-------
              CARDS
            -------->
        
        <!--Autobiography-->
        <div class="col-lg-4 col-md-4 col-sm-6 col-6" style="margin-bottom: 40px">
            <div class="card shadow border-light h-100">
                <div class="inner">
                    <a href="Autobiography"><img src="pics/autobiography.jpg" class="card-img-top img-fluid" alt="Responsive image"></a>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Autobiography</h6>
                    <p class="card-text">&#62;&nbsp;Vrhunac prefinjene sposobnosti</p>
                    <p class="card-text">&#62;&nbsp;Bezprekoran dizajn</p>
                    <p class="card-text">&#62;&nbsp;Jednostavno udoban</p>
                    <p class="card-text">&#62;&nbsp;Izvandredne performanse</p>
                </div>
            </div>
        </div>
        
        <!--Sport-->
        <div class="col-lg-4 col-md-4 col-sm-6 col-6" style="margin-bottom: 40px">
            <div class="card shadow border-light h-100">
                <div class="inner">
                    <a href="Sport"><img src="pics/sport.jpg" class="card-img-top img-fluid " alt="Responsive image"></a>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Sport</h6>
                    <p class="card-text">&#62;&nbsp;Elegantan i jednostavan</p>
                    <p class="card-text">&#62;&nbsp;Sportska linija dizajna</p>
                    <p class="card-text">&#62;&nbsp;Moćni muskulaturni stav</p>
                    <p class="card-text">&#62;&nbsp;Luksuzan, izuzetno udoban</p>
                </div>
            </div>
        </div>

        <!--Velar-->
        <div class="col-lg-4 col-md-4 col-sm-6 col-6" style="margin-bottom: 40px">
            <div class="card shadow border-light h-100">
                <div class="inner">
                    <a href="Velar"><img src="pics/velar.jpg" class="card-img-top img-fluid" alt="Responsive image"></a>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Velar</h6>
                    <p class="card-text">&#62;&nbsp;Avangardni Range Rover</p>
                    <p class="card-text">&#62;&nbsp;Revolucionarna filozofija</p>
                    <p class="card-text">&#62;&nbsp;Najprefinjeniji sportski terenac</p>
                    <p class="card-text">&#62;&nbsp;Integrisan zadnji spojler</p>
                </div>
            </div>
        </div>

        <!--Evoque-->
        <div class="col-lg-4 col-md-4 col-sm-6 col-6" style="margin-bottom: 40px">
            <div class="card shadow border-light h-100">
                <div class="inner">
                    <a href="Evoque"><img src="pics/evoque.jpg" class="card-img-top img-fluid" alt="Responsive image"></a>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Evoque</h6>
                    <p class="card-text">&#62;&nbsp;Izuzetan sportski terenac</p>
                    <p class="card-text">&#62;&nbsp;Distinktivna silueta nalik kupeu</p>
                    <p class="card-text">&#62;&nbsp;Dva infotainmen sistema</p>
                    <p class="card-text">&#62;&nbsp;Spreman za 21-vi vek</p>
                </div>
            </div>
        </div>

        <!--Discovery-->
        <div class="col-lg-4  col-md-4 col-sm-6 col-6" style="margin-bottom: 40px">
            <div class="card shadow border-light h-100">
                <div class="inner">
                    <a href="Discovery"><img src="pics/discovery.jpg" class="card-img-top img-fluid" alt="Responsive image"></a>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Discovery</h6>
                    <p class="card-text">&#62;&nbsp;Svestranost kabine</p>
                    <p class="card-text">&#62;&nbsp;Snažan i atletski stil</p>
                    <p class="card-text">&#62;&nbsp;Smela arhitektura</p>
                    <p class="card-text">&#62;&nbsp;Toucn Pro infotainment sistem</p>
                </div>
            </div>
        </div>

        <!--Defender-->
        <div class="col-lg-4 col-md-4 col-sm-6 col-6" style="margin-bottom: 40px">
            <div class="card shadow border-light h-100">
                <div class="inner">
                    <a href="Defender"><img src="pics/defenderper4.jpg" class="card-img-top img-fluid" alt="Responsive image"></a>
                </div>
                <div class="card-body">
                    <h6 class="card-title text-left">Defender</h6>
                    <p class="card-text">&#62;&nbsp;Spreman za moćne stvari</p>
                    <p class="card-text">&#62;&nbsp;70 godina inovativnosti</p>
                    <p class="card-text">&#62;&nbsp;Najizdržljiviji materijali</p>
                    <p class="card-text">&#62;&nbsp;Bezprekoran integritet.</p>
                </div>
            </div>
        </div>

    </div>

</div>

</main>

<?php

    include("php/footer.php");

?>


</body>
</html>
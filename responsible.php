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

    <title>ODGOVORNO</title>
</head>
<body>

<?php
/*------------------------
    INCLUDING NAVBAR
-------------------------*/
    include("php/navbar.php");
?>

<!------------------------
    RESPONSIBLE PARALLAX
-------------------------->

<section id="responsible_parallax" class="container-fluid parallax-section">

</section>

<!---------------------------
CENTRAL HEADING RESPONSIBLE
---------------------------->
<section class="container-fluid central_models1">

    <div class="row">

        <div class="col-md-12 text-center">
			<h1>ODGOVORNO POSLOVANJE</h1>
        </div>

    </div>


</section>

<!------------------------
    RESPONSIBLE SECTION
-------------------------->

<section class="container-fluid" id="responsible">

    <article class="container">

        <div class="row">
                <article class="col-md-6 p-2 w-100">
                    <h2>Zalažemo se da odgovorno i održivo razvijamo svoje poslovanje, tako da možemo dodati vrednost našim kupcima, kompaniji i široj privredi.</h2>
                    <p>DR RALF SPETH</p>
                    <p>CEO, JAGUAR LAND ROVER</p>
                </article>
        
                <article class="col-md-6">
                    <div class="row">

                        <div class="col-md-6 col-sm-6">
                            <h6>LIFE CYCLE IMPACT</h6>
                            <p>Da bismo smanjili ukupni uticaj naših proizvoda i operacija na životnu sredinu, mi koristimo Procenu životnog ciklusa da bismo obavestili o budućim istraživanjima i razvoju proizvoda.</p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h6>TRETIRANJE OTPADA KAO VREDNOG IZVORA</h6>
                            <p>Rezanje otpada i smanjenje upotrebe vode su prioriteti. Sve više prepoznajemo vrijednost naših resursa tražeći inovativne načine kako ih ponovo upotrijebiti ili reciklirati.</p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h6>SMANJIVANJE KARBONIZACIJE VAZDUHA</h6>
                            <p>Neprestano istražujemo nove načine za rešavanje našeg ugljen-otiska kada težimo ka smanjenju emisija za 30% u našim proizvodnim operacijama do 2020. godine.</p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h6>STVARANJE POSLOVNIH PRILIKA ZA MILIONE LJUDI</h6>
                            <p>Podržavamo lokalne i globalne zajednice u humanitarnim i zdravstvenim, obrazovnim, dizajnerskim, tehnološkim talentima, okruženju i očuvanju kroz naš Globalni program društveno odgovornog poslovanja 2020..</p>
                        </div>

                    </div>   
                </article>
                
        </div>

    </article>

</section>

<main id="responsible_main">

<section class="container-fluid">

    <div class="row align-items-center">
        <article class="col-lg-5 col-md-5   text-center">
            <h4>ODGOVORNOST PREMA ŽIVOTNOJ SREDINI</h4>
            <p>Ekološki uticaj našeg poslovanja nije ograničen na naše objekte. U stvari, uticaji u našem lancu snabdevanja su veći. Stoga ohrabrujemo naše dobavljače da se pridržavaju istih visokih standarda održivosti kao što smo ih i sami postavili. I blisko sarađujemo sa njima kako bismo smanjili negativan uticaj proizvoda koje kupujemo na životnu sredinu.</p>
        </article>

        <article class="col-lg-7 col-md-7   responsible_img">
            <img src="pics/solar.jpg" class="img-fluid" alt="Responsive image">
        </article>
    </div>


    <div class="row align-items-center">
        <article class="col-lg-7 col-md-7  responsible_img">
            <img src="pics/robot.jpg" class="img-fluid" alt="Responsive image">
        </article>

        <article class="col-lg-5 col-md-5  text-center">
            <h4>INSPIRIŠEMO INŽENJERE SUTRAŠNJICE</h4>
            <p>Mi smo posvećeni da sledećoj generaciji inženjera pružimo sredstva i veštine da bi pružili novi talas inovacija. Do sada je preko 200.000 dece učestotvalo u programima Tomorrow's Engineers. Takođe, stvaramo mogućnosti da se talentovani mladi pridruže našim Appretinceship programima.</p>
        </article>
    </div>

</section>

</main>

<?php
/*------------------------
    INCLUDING FOOTER
-------------------------*/
    include("php/footer.php");

?>


</body>
</html>
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

    <title>SERVIS</title>
</head>
<body>

<?php
/*------------------------
    INCLUDING NAVBAR
-------------------------*/
    include("php/navbar.php");
?>

<!------------------------
    SERVIS PARALLAX
-------------------------->

<section id="servis_parallax" class="container-fluid parallax-section">

</section>

<!---------------------------
CENTRAL HEADING SERVIS
---------------------------->
<section class="container-fluid central_models1">

    <div class="row">

        <div class="col-md-12 text-center">
			<h2 class="display-4">ZAKAZIVANJE SERVISA</h2>
        </div>

    </div>


</section>

<!------------------------
    SERVIS SECTION
-------------------------->

<main class="container-fluid" id="servis">

    <section class="container">

        <div class="row">

            <article class="col-md-6">
                <h5>Popunite formular i zakažite servis</h5><br><br>
                <p>Unesite Vaše ime*</p>
                <input type="text" class="form-control" id="service_name" name="service_name"><br><br>
                <p>Unesite Vaše prezime*</p>
                <input type="text" class="form-control" id="service_lastname" name="service_lastname"><br><br>
                <p>Unesite E-mail za kontakt*</p>
                <input type="text" class="form-control" id="service_email" name="service_email"><br><br>
                <p>Unesite broj telefona za kontakt*</p>
                <input type="text" class="form-control" id="service_phone" name="service_phone"><br><br>
                <p>Izaberite model Land Rover-a za servis*</p>
                <select class="custom-select" id="service_model" name="service_model">

                </select><br><br>
                <p>Izaberite vrstu kvara za popravku*</p>
                <select class="custom-select" id="service_glitch" name="service_glitch">

                </select><br><br><br><br>
                <p>Ukratko opišite kvar(maksimalno 150 karaktera)*</p>
                <textarea class="form-control" id="service_describe" name="service_describe"></textarea><br><br>
                <button class="btn" id="servis_btn">Zakažite servis</button><br><br>
            </article>
            <div class="col-md-12" id="error">

            </div>
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
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

    <title>USLOVI</title>
</head>
<body>

<?php
/*------------------------
    INCLUDING NAVBAR
-------------------------*/
    include("php/navbar.php");
?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Uslovi korišćenja</h1>
    <p class="lead">Poštovani,</p>
    <p class="lead">Ovaj projekat ili website je napravljen shodno vežbi tokom učenja programskog jezika PHP, kao i različitih tehnologija WEB programiranja kao što su HTML, CSS, Bootstrap, JavaScript i tako dalje.</p>
    <p class="lead">Želeo bih da napomenem da je ovaj projekat napravljen u <b>NEKOMERCIJALNE</b> svrhe, što znači da su svi korisnici fiktivni, proizvodi su takodje fiktivni i nigde ne postoji prava kupovina proizvoda. Zakazivanje servisa kao i test vožnji je takodje fiktivno, napravljeno i uradjeno u sklopu vežbanja. Zapravo, ništa od ovoga ne postoji kao stvarnost.</p>
    <p class="lead">Namera projekta ni u kom slučaju nije bila krađa tuđe intelektualne svojine kao i materijala koji su korišćenji u sklopu projekta. Napominjem, <b>NEKOMERCIJALNI</b>  projekat je u pitanju.</p>
    <p class="lead">Korišćenja literatura:</p>
    <ul>
        <li><a href="https://www.landrover.rs/" target="_blank">Land Rover</a></li>
        <li><a href="https://www.google.com/" target="_blank">Google</a></li>
        <li><a href="https://stackoverflow.com/" target="_blank">Stackoverflow</a></li>
        <li><a href="https://www.w3schools.com/" target="_blank">W3schools</a></li>
        <li><a href="https://www.youtube.com/" target="_blank">Youtube</a></li>
        <li><a href="https://getbootstrap.com/" target="_blank">Bootstrap</a></li>
    </ul>
    <p class="lead">Za sve dodatne infromacije možete me kontaktirati na E-mail borisperkovic89@yahoo.com, ili na broj telefona +381695382477</p>
    <p class="lead">Boris Perković</p>
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
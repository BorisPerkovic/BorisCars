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
    <link href="css/lightbox.css" rel="stylesheet">

    <title>GALERIJA</title>
</head>
<body>

<?php
/*------------------------
    INCLUDING NAVBAR
-------------------------*/
    include("php/navbar.php");
?>

<div class="container-fluid">
        <div class="gallery">
            <a href="images/autobiography-1.jpg" data-lightbox="mygallery"><img src="images/autobiography-1-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/autobiography-2.jpg" data-lightbox="mygallery"><img src="images/autobiography-2-small.jpg"  class="img-fluid" alt="Responsive image"></a>
            <a href="images/autobiography-3.jpg" data-lightbox="mygallery"><img src="images/autobiography-3-small.jpg"  class="img-fluid" alt="Responsive image"></a>
            <a href="images/autobiography-4.jpg" data-lightbox="mygallery"><img src="images/autobiography-4-small.jpg"  class="img-fluid" alt="Responsive image"></a>
            <a href="images/autobiography-5.jpg" data-lightbox="mygallery"><img src="images/autobiography-5-small.jpg"  class="img-fluid" alt="Responsive image"></a>
            <a href="images/defender-1.jpg" data-lightbox="mygallery"><img src="images/defender-1-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/defender-2.jpg" data-lightbox="mygallery"><img src="images/defender-2-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/defender-3.jpg" data-lightbox="mygallery"><img src="images/defender-3-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/discovery-1.jpg" data-lightbox="mygallery"><img src="images/discovery-1-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/discovery-2.jpg" data-lightbox="mygallery"><img src="images/discovery-2-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/discovery-3.jpg" data-lightbox="mygallery"><img src="images/discovery-3-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/evoque-1.jpg" data-lightbox="mygallery"><img src="images/evoque-1-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/evoque-2.jpg" data-lightbox="mygallery"><img src="images/evoque-2-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/evoque-3.jpg" data-lightbox="mygallery"><img src="images/evoque-3-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/evoque-4.jpg" data-lightbox="mygallery"><img src="images/evoque-4-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/sport-1.jpg" data-lightbox="mygallery"><img src="images/sport-1-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/sport-2.jpg" data-lightbox="mygallery"><img src="images/sport-2-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/sport-3.jpg" data-lightbox="mygallery"><img src="images/sport-3-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/velar-1.jpg" data-lightbox="mygallery"><img src="images/velar-1-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/velar-2.jpg" data-lightbox="mygallery"><img src="images/velar-2-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/velar-3.jpg" data-lightbox="mygallery"><img src="images/velar-3-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/velar-4.jpg" data-lightbox="mygallery"><img src="images/velar-4-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/velar-5.jpg" data-lightbox="mygallery"><img src="images/velar-5-small.jpg" class="img-fluid" alt="Responsive image"></a>
            <a href="images/velar-7.jpg" data-lightbox="mygallery"><img src="images/velar-7-small.jpg" class="img-fluid" alt="Responsive image"></a>
        </div>
</div>


<?php
/*------------------------
    INCLUDING FOOTER
-------------------------*/
    include("php/footer.php");

?>

<script src="jscript/lightbox-plus-jquery.js"></script>
</body>
</html>
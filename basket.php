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

    <title>KORPA</title>
</head>
<body>

<?php
/*------------------------
    INCLUDING NAVBAR
-------------------------*/
    include("php/navbar.php");
?>

<!---------------------------
CENTRAL HEADING BASKET
---------------------------->
<div class="container-fluid" id="basket">

    <div class="row">

        <div class="col-md-12 text-center">
			<h1>KORPA</h1>
        </div>

    </div>


</div>

<!------------------------
    BASKET SECTION
-------------------------->

<div class="container-fluid" id="basket_section">

    <div class="container">

        <div class="row text-center" id="basket_row">
           
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
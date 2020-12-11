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

    <title>TEST VOŽNJA</title>
</head>
<body>

<?php
/*------------------------
    INCLUDING NAVBAR
-------------------------*/
    include("php/navbar.php");
?>

<!------------------------
    TEST DRIVE PARALLAX
-------------------------->

<div id="testDrive_parallax" class="container-fluid parallax-section">

</div>

<!---------------------------
CENTRAL HEADING TEST DRIVE
---------------------------->
<div class="container-fluid central_models1">

    <div class="row">

        <div class="col-md-12 text-center">
			<h1>ZAKAZIVANJE TEST VOŽNJE</h1>
        </div>

    </div>


</div>

<!------------------------
    TEST DRIVE SECTION
-------------------------->

<div class="container-fluid" id="test_drive">

    <div class="container">

        <div class="row">

            <div class="col-md-6">
                <h5>Popunite formular i zakažite test vožnju</h5><br><br>
                <p>Unesite Vaše ime*</p>
                <input type="text" class="form-control" id="testDrive_name" name="testDrive_name"><br><br>
                <p>Unesite Vaše prezime*</p>
                <input type="text" class="form-control" id="testDrive_lastname" name="testDrive_lastname"><br><br>
                <p>Unesite E-mail za kontakt*</p>
                <input type="text" class="form-control" id="testDrive_email" name="testDrive_email"><br><br>
                <p>Unesite broj telefona za kontakt*</p>
                <input type="text" class="form-control" id="testDrive_phone" name="testDrive_phone"><br><br>
                <p>Izaberite model Land Rover-a za test vožnju*</p>
                <select class="custom-select" id="testDrive_model" name="testDrive_model">

                </select><br><br>
                <button class="btn" id="testDrive_btn">Zakažite vožnju</button><br><br>
            </div>
            <div class="col-md-12" id="error">

            </div>
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
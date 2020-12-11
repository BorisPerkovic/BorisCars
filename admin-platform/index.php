<?php
session_start();
require_once("php/function.php");
require_once("php/classBase.php");
require_once("../php/classLog.php");
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
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/icons/all.min.css" rel="stylesheet">

    <title>ADMIN-PLATFORM</title>
</head>
<body id="admin">


<!------------------------
    LOGIN SECTION
-------------------------->

<div class="container-fluid" >

    <div class="row">

        <!--LOGO-->
        <div class="col-lg-8" id="admin-logo">
            <img src="../admin-platform/products_pics/admin-logo.png" class="img-fluid" alt="Responsive image">Land Rover International   
        </div>

        <div class="col-lg-8" id="admin_login">

            <div class="row">
                
                <!--LOGIN FORM-->
                <div class="col-md-5" id="admin_login_form">

                    <div class="modal-header text-center">
                        <h4 class="modal-title text-center w-100 font-weight-bold">Prijava</h4>
                    </div>

                    <div class="modal-body">

                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="admin_email" id="admin_email" placeholder="Unesite E-mail adresu...">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-unlock-alt"></i></span>
                            </div>
                            <input type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="admin_password" id="admin_password" placeholder="Unesite lozinku...">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" name="remember" id="remember" class="form-check-input">
                            <label class="form-check-label d-flex">Zapamti me</label>
                        </div><br>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <a href="#" class="btn btn-block log" id="admin_login_btn">Ulogujte se</a>
                    </div>
                </div>
                <!--END OFLOGIN FORM-->

                <!--HERO FORM-->
                <div class="col-md-7" id="admin_login_hero">
                    <img src="../admin-platform/products_pics/admin-panel.jpg" class="img-fluid" alt="Responsive image">
                </div>
            </div>

        </div>

        <div class="col-lg-8" id="admin_error">
            
        </div>


        <!--SOCIALS-->
        <div class="col-lg-8" id="admin-socials">
            <p>Prijavite se pomoću:</p>
            <p><i class="fab fa-google"></i> <i class="fab fa-twitter"></i> <i class="fab fa-linkedin"></i> <i class="fab fa-facebook"></i></p>     
        </div>

    </div>
        
</div>





</body>
</html>
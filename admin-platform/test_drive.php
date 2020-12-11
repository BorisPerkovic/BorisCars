<?php
session_start();
require_once("php/function.php");
require_once("php/classBase.php");
$db=new Baza();
$db->connect();
if(!login())
{
  echo "Morate biti ulogovani da biste mogli da pristupite ovoj stranici!!!<br>Molimo Vas, vratite se na Log in stranicu<br> <a href='index.php'>Log in</a>";
  exit();
}
if($_SESSION['admin_status']!="Administrator" AND $_SESSION['admin_status']!="Vozač")
{
    echo "Nemate ovlašćenja da pristupite ovoj stranici.<br> Molimo Vas ulogujte se sa ovlaščenim statusom da biste mogli da pristupite ovoj stranici<br><a href='index.php'>Log in</a>";
    unistiSesiju();
    exit(); 
}
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
    <script src="jscript/testDrive.js"></script>
    <script src="jscript/config.js"></script>

    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/icons/all.min.css" rel="stylesheet">

    <title>STATISTIKA VOŽNJE</title>
</head>
<body id="admin-nav">

<!----------------------
    NAVBAR HEAD SECTION
------------------------>
<nav class="navbar navbar-light bg-primary justify-content-between" id="admin_head">

  <!--Company logo-->
  <a class="navbar-brand"><img src="products_pics/admin-logo-nav.png" class="img-fluid" alt="Responsive image"></a>


    <!--Button for logOut and showing users name lastname and status-->
  <form class="form-inline">
    <div class="btn-group profil">
        <button type="button" class="btn profil-text dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo "{$_SESSION['admin_name']} ({$_SESSION['admin_status']})"; ?>
        </button>
        <div class="dropdown-menu dropdown-menu-right profil-link">
            <button class="dropdown-item" type="button"><a href="php/logIn.php?logoff">Odjavite se</a></button>
        </div>
    </div> 
  </form>

</nav>

<!-------------------------
    NAVBAR MIDDLE SECTION
---------------------------->

<?php
  include("php/navBar_middle.php");
?>


<!-------------------------
    NAVBAR BOTTOM SECTION
---------------------------->
<nav class="navbar navbar-expand-lg navbar-light" id="nav_bottom">
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <!-----------------
        DATE SECTION
      ------------------->
      <li class="nav-item">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Datum
        </a>
        <div class="dropdown-menu" id="admin_date" aria-labelledby="navbarDropdown">
          <p>Današnji datum je: <?php echo date("d.m.Y");?></p>
          <p>Od:</p>
          <input  type="date" class="dropdown-item" name="startDate" id="startDate" value="<?php echo date("Y-m-d");?>">
          <p>Do:</p>
          <input  type="date" class="dropdown-item" name="endDate" id="endDate" value="<?php echo date("Y-m-d");?>">
          <a href="#" class="btn btn-primary btn-block testDrives_selector" id="date_save">Sačuvajte datum</a>
        </div>
      </li>

      <!-----------------
        MODEL SECTION
      ------------------->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Model
        </a>
        <div class="dropdown-menu admin_checkbox" id="admin_model_data" aria-labelledby="navbarDropdown">
    
        </div>


      <!-----------------
        STATUS SECTION
      ------------------->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Status
        </a>
        <div class="dropdown-menu admin_checkbox" aria-labelledby="navbarDropdown">
          <label class="dropdown-item form-check-label">
                  <input type="checkbox" class="form-check-input testDrives_selector status" value="Na čekanju"> Na čekanju
          </label>
          <label class="dropdown-item form-check-label">
                  <input type="checkbox" class="form-check-input testDrives_selector status" value="Voženo"> Voženo
          </label>
          <label class="dropdown-item form-check-label">
                  <input type="checkbox" class="form-check-input testDrives_selector status" value="Odbijeno"> Odbijeno
          </label>
        </div>
      </li>
    </ul>

    <!-----------------
        SEARCH SECTION
      ------------------->
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" id="search_testDrive" placeholder="Unesite E-mail adresu" aria-label="Search">
      <a href="#" class="btn testDrives_selector">Pretraga</a>
    </form>
  </div>
</nav>

<!-----------------
  MAIN SECTION
------------------->
<div class="container-fluid">

  <div class="row">

    <!-- Left part with table   -->
    <div class="col-lg-8">
      <table class="table table-hover text-left" id="admin_table_data">
        <thead>
          <tr>
            <th scope="col">Vožnja broj</th>
            <th scope="col">Model</th>
            <th scope="col">Datum zahteva</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody id="table_body_testDrive">

        </tbody>
      </table>
      <div class="text-center">
          <img id="loader" src="../pics/loading.gif">
        </div>
    </div>

    <!-- Right part with data   -->
    <div class="col-lg-4">
    <!--  <p id="admin_servis_data" class="text-center">Podaci o zahtevu:</p>-->
      <table class="table table-hover text-center" id="admin_drive_data">
        <thead>
          <tr>
            <th scope="col">Podaci o zahtevu</th>
          </tr>
        </thead>
      </table>
      <div id="data_drive">

      </div>
    </div>

  </div>

</div>
</body>
</html>
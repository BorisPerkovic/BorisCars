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
if($_SESSION['admin_status']!="Administrator")
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
    <script src="jscript/testDriveStatistics.js"></script>
    <script src="jscript/config.js"></script>

    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/icons/all.min.css" rel="stylesheet">

    <title>Logovi</title>
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

<!-----------------
  MAIN SECTION
------------------->
<div class="container-fluid">

  <div class="row">

    <div class="col-log-6" style="padding: 20px;">
        <form action="logs.php" method="post" >
            <select name="logovi" id="logovi">
                <option value="0">--Izaberite log fajl--</option>
                <option value="korisnici.txt">Korisnici</option>
                <option value="logovanja.txt">Logovanja</option>
                <option value="proizvodi.txt">Proizvodi</option>
                <option value="servisi.txt">Servisi</option>
                <option value="test_vožnje.txt">Test vožnje</option>
                <option value="korpa.txt">Korpa</option>
            </select><br><br>
            <button class="btn">Prikaži</button>
        </form>
            <br><br>
        <?php
            if(isset($_POST['logovi']) and $_POST['logovi']!="0")
            {
                $imeFajla="../logs/".$_POST['logovi'];
                if(file_exists($imeFajla))
                {
                    $prikaz=file_get_contents($imeFajla);
                    $prikaz=str_replace("\r\n", "<br>", $prikaz);
                    echo $prikaz;
                }
                else echo "Ne postoji datoteka koju ste izabrali";
            }
            else echo "Niste izabrali log fajl!!";
        ?>
    </div>

    

  </div>

</div>
</body>
</html>
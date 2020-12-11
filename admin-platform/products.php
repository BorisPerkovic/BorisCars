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
if($_SESSION['admin_status']!="Administrator" AND $_SESSION['admin_status']!="Menadžer")
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
    <script src="jscript/products.js"></script>
    <script src="jscript/config.js"></script>

    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/icons/all.min.css" rel="stylesheet">

    <title>PROIZVODI</title>
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


<!---------------------------------
    NAVBAR BOTTOM PRODUCTS SECTION
------------------------------------>
<nav class="navbar navbar-expand-lg navbar-light" id="nav_bottom">
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item" id="adding_product">
        <a class="nav-link" href="#" id="navbarDropdown">
          Dodavanje proizvoda
        </a>
      </li>

      <li class="nav-item" id="updeting_product">
        <a class="nav-link" href="#" id="navbarDropdown">
          Menjanje proizvoda
        </a>
      </li>

      <li class="nav-item" id="deleting_product">
        <a class="nav-link" href="#" id="navbarDropdown">
          Brisanje proizvoda
        </a>
      </li>
    </ul>
      
  </div>
</nav>

<!-----------------
  MAIN SECTION
------------------->
<div class="container-fluid">

  <div class="row">

    <!-- ADDING NEW PRODUCT SECTION   -->
    <div class="col-lg-8" id="adding_product_section">
        <table class="table table-hover text-left" id="admin_table_data">
            <thead>
            <tr>
                <th scope="col">Dodavanje proizvoda</th>
            </tr>
            </thead>
        </table>
        <div class="col-lg-8">

            <form action="#" method="POST" id="products_form" enctype="multipart/form-data" name="products_form">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Naziv proizvoda</th>
                    <td colspan="5"><input type="text" class="form-control" id="products_name" name="products_name"></td>
                  </tr>
                  <tr>
                    <th scope="row">Materijal proizvoda</th>
                    <td colspan="5"><input type="text" class="form-control" id="products_material" name="products_material"></td>
                  </tr>
                  <tr>
                    <th scope="row">Cena proizvoda</th>
                    <td colspan="5"><input type="text" class="form-control" id="products_price" name="products_price"></td>
                  </tr>
                  <tr>
                    <th scope="row">Boja proizvoda</th>
                    <td colspan="5"><input type="text" class="form-control" id="products_color" name="products_color"></td>
                  </tr>
                  <tr>
                    <th scope="row">Opis proizvoda</th>
                    <td colspan="5"><input type="text" class="form-control" id="products_describe" name="products_describe"></td>
                  </tr>
                </tbody>
              </table>
                <p>Dodavanje slike proizvoda*</p>
                <input type="file" name="image" id="image"><br><br>
            
            </form>
                <button class="btn " id="add_prodduct">Sačuvajte proizvod</button><br><br>

        </div>
        <div class="col-lg-8" id="error"></div>
    </div>



    <!-- UPDATE PRODUCT SECTION   -->
    <div class="col-lg-8" id="updeting_product_section">
      <table class="table table-hover text-left" id="admin_table_data">
        <thead>
          <tr>
            <th scope="col">Menjanje proizvoda</th>
          </tr>
        </thead>
        </table>
        <div class="col-lg-8">
                <div class="input-group central">
                <select class="custom-select select_products" id="inputGroupSelect01">
                    <option value="0">Proizvodi</option>
                    
                </select>
                <button id="product_chose_update" class='btn ' style="margin-left: 20px;">Izaberite proizvod</button>
                </div>
            <form action="#" method="POST" id="update_form" enctype="multipart/form-data" name="update_form">
            <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">ID proizvoda</th>
                    <td colspan="5"><input readonly="readonly" type="text" class="form-control" id="update-disabled" name="update-disabled"></td>
                  </tr>
                  <tr>
                    <th scope="row">Naziv proizvoda</th>
                    <td colspan="5"><input type="text" class="form-control" id="update_name" name="update_name"></td>
                  </tr>
                  <tr>
                    <th scope="row">Materijal proizvoda</th>
                    <td colspan="5"><input type="text" class="form-control" id="update_material" name="update_material"></td>
                  </tr>
                  <tr>
                    <th scope="row">Cena proizvoda</th>
                    <td colspan="5"><input type="text" class="form-control" id="update_price" name="update_price"></td>
                  </tr>
                  <tr>
                    <th scope="row">Boja proizvoda</th>
                    <td colspan="5"><input type="text" class="form-control" id="update_color" name="update_color"></td>
                  </tr>
                  <tr>
                    <th scope="row">Opis proizvoda</th>
                    <td colspan="5"><input type="text" class="form-control" id="update_describe" name="update_describe"></td>
                  </tr>
                </tbody>
              </table>
                <p>Dodavanje slike proizvoda*</p>
                <input type="file" name="image_update" id="image_update"><br><br>
            
            </form>
                <button class="btn" id="update_prodduct">Izmenite proizvod</button><br><br>

        </div>
          <div class="col-lg-8" id="error_update">
          </div>
    </div>


    <!-- DELETE PRODUCT SECTION   -->
    <div class="col-lg-8" id="deleting_product_section">
      <table class="table table-hover text-left" id="admin_table_data">
        <thead>
          <tr>
            <th scope="col">Brisanje proizvoda</th>
          </tr>
        </thead>
        </table>
        <div class="col-lg-8" id="delete-form">
                <div class="input-group central">
                <select class="custom-select select_products_delete" id="inputGroupSelect02">
                    <option value="0">Proizvodi</option>
                    
                </select>
                <button id="product_chose_delete" class='btn' style="margin-left: 20px;">Izaberite proizvod</button>
                </div>
                <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">ID proizvoda</th>
                    <td colspan="5"><input readonly="readonly" type="text" class="form-control" id="delete-disabled" name="delete-disabled"></td>
                  </tr>
                  <tr>
                    <th scope="row">Naziv proizvoda</th>
                    <td colspan="5"><input type="text" class="form-control" id="delete_name" name="delete_name"></td>
                  </tr>
                  <tr>
                    <th scope="row">Materijal proizvoda</th>
                    <td colspan="5"><input type="text" class="form-control" id="delete_material" name="delete_material"></td>
                  </tr>
                  <tr>
                    <th scope="row">Cena proizvoda</th>
                    <td colspan="5"><input type="text" class="form-control" id="delete_price" name="delete_price"></td>
                  </tr>
                  <tr>
                    <th scope="row">Boja proizvoda</th>
                    <td colspan="5"><input type="text" class="form-control" id="delete_color" name="delete_color"></td>
                  </tr>
                  <tr>
                    <th scope="row">Opis proizvoda</th>
                    <td colspan="5"><input type="text" class="form-control" id="delete_describe" name="delete_describe"></td>
                  </tr>
                </tbody>
              </table>
              <button class="btn" id="delete_prodduct">Obrišite proizvod</button><br><br>

        </div>
        <div class="col-lg-8" id="error_delete"></div>
    </div>

  </div>

</div>
</body>
</html>
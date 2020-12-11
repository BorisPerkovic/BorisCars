<!--------------------
    NAVBAR SECTION
--------------------->
<nav class="navbar fixed-top navbar-light  navbar-expand-lg" id="navbar">

  <!-- Company logo-->
  <a class="navbar-brand" href="#"><img src="pics/logo.png" class="img-fluid" alt="Responsive image"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <!-- Navigation links-->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" id="mr-auto">
      <li class="nav-item">
        <a class="nav-link navbara" href="index.php">Početna <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a id="dropdown_models" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Modeli
        </a>

        <!--Dropdown with models-->
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="navdropdown">
          <a class="dropdown-item" href="autobiography.php"><img src="pics/autobiography.jpg" class="navimg"  alt="Range"> Range Rover Autobiography</a>
          <hr class="navdropdown">
          <a class="dropdown-item" href="sport.php"><img class="navimg" src="pics/sport.jpg" alt="Range"> Range Rover Sport</a>
          <hr class="navdropdown">
          <a class="dropdown-item" href="velar.php"><img class="navimg" src="pics/velar.jpg" alt="Range"> Range Rover Velar</a>
          <hr class="navdropdown">
          <a class="dropdown-item" href="evoque.php"><img class="navimg" src="pics/evoque.jpg" alt="Range"> Range Rover Evoque</a>
          <hr class="navdropdown">
          <a class="dropdown-item" href="discovery.php"><img class="navimg" src="pics/discovery.jpg" alt="Range"> Range Rover Discovery</a>
          <hr class="navdropdown">
          <a class="dropdown-item" href="defender.php"><img class="navimg" src="pics/defender.jpg" alt="Range"> Range Rover Defender</a>
        </div>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Galerija</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="history.php">Istorija</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="servis.php">Servis</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="test_drive.php">Test vožnja</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="shop.php">Shop</a>
      </li>
    </ul>

    <!--Right part-buttons for login and regyster-->
    <form class="form-inline my-2 my-lg-0">
        <?php
                //IF user is login buttons for login and registry are hide and show users name lastname status
            if (login())
            {
                if($_SESSION['users_status']=="Administrator" )
                {
            ?>      
                    <div class="btn-group profil">
                        <button type="button" class="btn profil-text dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo "{$_SESSION['users_name']} ({$_SESSION['users_status']})"; ?> <i class='fas fa-shopping-cart'></i> <span class="cart_product_number"></span> 
                        </button>
                        <div class="dropdown-menu dropdown-menu-right profil-link">
                            <button class="dropdown-item" type="button"><a href="basket.php">Korpa (<span class="cart_product_number"></span>)  </a></button>
                            <button class="dropdown-item" type="button"><a href="comments.php">Komentari</a></button>
                            <button class="dropdown-item" type="button"><a href="logs.php">Logovi</a></button>
                            <button class="dropdown-item" type="button"><a href="php/logIn.php?logoff">Odjavite se</a></button>
                        </div>
                    </div>

                <?php
                    // IF users login have no status show users name lastname
                }
                else
                {
                ?>
                    <div class="btn-group profil">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 10px;">
                            <?php echo "{$_SESSION['users_name']}" ?> <i class='fas fa-shopping-cart'></i> <span class="cart_product_number"></span>  
                        </button>
                        <div class="dropdown-menu dropdown-menu-right profil-link">
                            <button class="dropdown-item" type="button"><a href="basket.php">Korpa (<span class="cart_product_number"></span>) </a></button>
                            <button class="dropdown-item" type="button"><a href="php/logIn.php?logoff">Odjavite se</a></button>
                        </div>
                    </div>
                <?php
                }
                ?>
            <?php
            }
            else
            {
            ?>
                <!--Buttons in header for login or register if user is not login-->
            <div class="col- margin">
                <ul class='nav'>
                        <li class='nav-item'>
                        <a href='' class='btn logregbtn' data-toggle='modal' data-target='#signinPage'>Prijava</a>
                        </li>
                        <li class='nav-item'>
                        <a href='' class='btn logregbtn' data-toggle='modal' data-target='#signupPage'>Registracija</a>
                        </li>
                </ul>
            </div>
            <?php
            }
            ?>
    </form>
  </div>

<!--------------------
    MODAL SECTION
--------------------->

<!-- Log in Page Content-->
<div class="modal fade" id="signinPage">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header text-center">
                <h4 class="modal-title text-center w-100 font-weight-bold">Prijava</h4>
                <button type="button" class="close" data-dismiss="modal" aria-lable="close">&times;</button>
            </div>

            <div class="modal-body mx-4">
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="username" id="username" placeholder="E-mail">
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-unlock-alt"></i></span>
                    </div>
                    <input type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="password" id="password" placeholder="Lozinka">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                    <label class="form-check-label d-flex">Zapamti me</label><br>

                     <!--   <p class="font-small blue-text d-flex justify-content-center"><a href="" class="blue-text ml-1">Zaboravljena lozinka?</a></p>  -->

                        <p class="text-danger" id="loginError"></p>
                
                </div>
            </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-block log" id="logIn">Ulogujte se</button>
                </div>

        </div>
    </div>
</div>

<!-- Registry Page Content-->
<div class="modal fade" id="signupPage">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header text-center">
                <h4 class="modal-title text-center w-100 font-weight-bold">Registracija</h4>
                <button type="button" class="close" data-dismiss="modal" aria-lable="close">&times;</button>
            </div>
            <div class="modal-body mx-4">
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="name" id="name" placeholder="Ime">
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="lastname" id="lastname" placeholder="Prezime">
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="email" id="email" placeholder="E-mail">
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="pass" id="pass" placeholder="Šifra">
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-unlock-alt"></i></span>
                    </div>
                    <input type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="passrepeat" id="passrepeat" placeholder="Ponovite šifru">
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-address-card"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="addres" id="addres" placeholder="Adresa">
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-phone-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="phone" id="phone" placeholder="Telefon">
                </div>
                
                <p class="text-danger" id="registryError"></p>
            </div>

            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-block log" id="registry">Registrujte se</button>
            </div>
        </div>
    </div>
</div>
</nav>
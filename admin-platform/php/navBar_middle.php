<nav class="navbar navbar-expand-lg navbar-light bg-dark" id="nav_middle">

  <div class="collapse navbar-collapse" id="navbarNav">
    <?php
      if($_SESSION['admin_status']=="Administrator")
      {
    ?>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link navbara active" href="statistics_service.php">Statistika servisiranja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbara" href="statistics_testDrive.php">Statistika test vožnji</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbara" href="products.php">Proizvodi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbara"href="service.php">Servisiranje</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbara" href="test_drive.php">Test vožnje</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbara" href="logs.php">Logovi</a>
          </li>
        </ul>
    <?php
      }
      elseif($_SESSION['admin_status']=="Serviser")
      {
    ?>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link navbara active" href="service.php">Servisiranje</a>
            </li>
          </ul>
    <?php
      }
      elseif($_SESSION['admin_status']=="Vozač")
      {   
    ?>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link navbara active" href="test_drive.php">Test vožnje</a>
          </li>
        </ul>
    <?php
      }
      else
      {
    ?>
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link navbara active" href="statistics_service.php">Statistika servisiranja</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link navbara" href="statistics_testDrive.php">Statistika test vožnji</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbara" href="products.php">Proizvodi</a>
          </li>
        </ul>   
    <?php
      }
    ?>   
    
  </div>
</nav>
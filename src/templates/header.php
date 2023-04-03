<?php ob_start(); ?>
<nav class="navbar fixed-top navbar-expand-sm navbar-dark p-3 bg-transparent" id="headerNav">
      <div class="container-fluid p-0">
      <ul class="navbar-nav ">
        <li class="nav-item">
              <a class="nav-link mx-2" aria-current="page" href="index.php?page=Home"><img src="../src/assets/Image/logoIC.webp" alt="" width="300"></i></a>
            </li>
        </ul>
      
          <ul class="navbar-nav mx-end me-5">
            <li class="nav-item">
              <a class="nav-link mx-2 navLinks" aria-current="page" href="index.php?page=Home">Acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 navLinks" href="index.php?page=Locations">Locations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 navLinks" href="index.php?page=Restaurant">Restaurant</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link mx-2 navLinks" href="index.php?page=Activite">Activités</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 navLinks" href="index.php?page=Team">Notre Equipe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 navLinks" href="index.php?page=Contact">Contact</a>
            </li>
          </ul>
          
          <ul class="navbar-nav ">
        <li class="nav-item"> 
              <a class="nav-link mx-2 " aria-current="page" href=""><i class="fa-brands fa-square-facebook fa-lg socialLinks"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 " aria-current="page" href=""><i class="fa-brands fa-square-twitter  fa-lg socialLinks"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 " aria-current="page" href=""><i class="fa-brands fa-square-instagram fa-lg socialLinks"></i></a>
            </li>
            
        </ul>
      </div>
    </nav>
<?php $header = ob_get_clean(); 
?>
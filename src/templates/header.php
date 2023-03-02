<?php ob_start(); ?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-3 bg-dark" id="headerNav" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 active" aria-current="page" href="index.php?page=Home">Acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="index.php?page=Locations">Locations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#">Restaurant</a>
            </li>
            <li class="nav-item d-none d-lg-block" style="border-left:1px solid;border-right:1px solid;">
              <a class="nav-link mx-2" href="#" >
              <h1 >Íslenskt sumarhús <br><strong>Chalais Islandais</strong></h1>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#">Activités</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#">Notre Equipe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<?php $header = ob_get_clean(); 
require('layoutHeader.php');
?>
<?php ob_start(); ?>
<nav class="navbar sticky-top navbar-expand-sm navbar-dark p-3 bg-dark" id="headerNav">
      <div class="container-fluid p-0">
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
              <a class="nav-link mx-2" href="index.php?page=Restaurant">Restaurant</a>
            </li>
            <li class="nav-item d-none d-lg-block ms-5 me-5" id="titleNav">
              <a class="nav-link mx-2" href="index.php?page=Home" >
              <h1 >Íslenskt sumarhús <br><strong>~ Chalets, Loges de Verres, Torfbaeir ~</strong></h1>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="index.php?page=Activite">Activités</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="index.php?page=Team">Notre Equipe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="index.php?page=Contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<?php $header = ob_get_clean(); 
?>
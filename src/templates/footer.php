<?php ob_start(); ?>
<div class="container-fluid" id="contFooter">

  <footer class=" text-center text-lg-start text-white " >
    <div class="container p-4">

      <div class="row my-4">

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" id="logoFooter" >
            <img src="../src/assets/Image/islandiccottagefooter.webp" alt="Chalets Islandais Logo"
                 loading="lazy" />
          </div>
          <p class="text-center fontChange"><strong>Íslenskt sumarhús</strong><br>Chalets Islandais </p>
          <ul class="list-unstyled d-flex flex-row justify-content-center">
            <li>
              <a class="text-white " href="#!">
              <i class="fa-brands fa-facebook fa-2x m-1 socialsFooter"></i>
              </a>
            </li>
            <li>
              <a class="text-white px-2" href="#!">
              <i class="fa-brands fa-twitter fa-2x m-1 socialsFooter"></i>
              </a>
            </li>
            <li>
              <a class="text-white ps-2" href="#!">
              <i class="fa-brands fa-instagram fa-2x m-1 socialsFooter"></i>
              </a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 listeFooter">
          <h2 class="text-uppercase mb-4 fontChange">Liens utiles</h2>
          <hr>
          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="index.php?page=Locations" class="text-white">- Locations -</a>
            </li>
            <li class="mb-2">
              <a href="index.php?page=Restaurant" class="text-white">- Restaurant -</a>
            </li>
            <li class="mb-2">
              <a href="index.php?page=Activite" class="text-white">- Activités -</a>
            </li>
            <li class="mb-2">
              <a href="index.php?page=Team" class="text-white">- Notre Equipe -</a>
            </li>
            <li class="mb-2">
              <a href="index.php?page=Contact" class="text-white">- Contact -</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 listeFooter">
          <h2 class="text-uppercase mb-4 fontChange">Plus</h2>
          <hr>
          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="index.php?page=Propos" class="text-white">- A propos de nous -</a>
            </li>
            <li class="mb-2">
              <a href="index.php?page=Iceland" class="text-white">- L'Islande en détail -</a>
            </li>
            <li class="mb-2">
              <a href="index.php?page=Avis" class="text-white">- Vos Avis -</a>
            </li>
            <li class="mb-2">
              <a href="index.php?page=Carrier" class="text-white">- Carrière -</a>
            </li>
            <li class="mb-2">
              <a href="index.php?page=Conditions" class="text-white">- Condition Générales - </a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 listeFooter">
          <h2 class="text-uppercase mb-4 fontChange">Contact</h2>
          <hr>
          <ul class="list-unstyled">
            <li>
              <p><i class="fas fa-map-marker-alt pe-2"></i> Hverafold 111, Reykjavík</p>
            </li>
            <li>
              <p><i class="fas fa-phone pe-2"></i> +354 429 3729</p>
            </li>
            <li>
              <p><i class="fas fa-envelope pe-2 mb-0"></i> islenskt.sumarhus@contact.com</p>
            </li>
          </ul>
        </div>

      </div>

    </div>

    <div class="text-center p-3" id="copyrightsFooter">
      © 2022-2023 Copyright:
      <a class="text-white" href="">Íslenskt sumarhús</a>
    </div>
    
  </footer>

</div>
<?php $footer = ob_get_clean();?>
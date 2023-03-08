<?php ob_start(); ?>
<div class="container-fluid" style="background-color:#1f2224;">

  <footer class=" text-center text-lg-start text-white" >
    <div class="container p-4">

      <div class="row my-4">

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
            <img src="../src/assets/Image/islandiccottage.png" height="150" alt=""
                 loading="lazy" />
          </div>
          <p class="text-center fontChange"><strong>Íslenskt sumarhús</strong><br>Chalais Islandais </p>
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

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4 fontChange">Liens utiles</h5>
          <hr style="background:grey;width:8em;">
          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="#!" class="text-white">- Locations -</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">- Restaurant -</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">- Activités -</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">- Notre Equipe -</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">- Contact -</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4 fontChange">Plus</h5>
          <hr style="background:grey;width:8em;">
          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="#!" class="text-white">- A propos de nous -</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">- L'Islande en détail -</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">- Vos Avis -</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">- Carrière -</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">- Condition Générales - </a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4 fontChange">Contact</h5>
          <hr style="background:grey;width:8em;">
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

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2022-2023 Copyright:
      <a class="text-white" href="">Íslenskt sumarhús</a>
    </div>
    
  </footer>

</div>
<?php $footer = ob_get_clean();?>
<?php require('layoutFooter.php'); ?>
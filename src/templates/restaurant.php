<?php $title="Restaurant" ?>
<?php ob_start(); ?>
<div class="container-fluid p-0">
    <div class="row" id="introRestaurant">
        <div class="col-12 d-flex justify-content-center align-items-center" id="introRest">
            <img src="../src/assets/Image/whiteleaf.webp" alt="Border Plante">
            <h1 class="m-5 text-center"><strong>Profitez de votre diner avec nous dans notre Restaurant !<br>"Le Lagon de Lave"</strong><br>
            Njóttu kvöldverðarins með okkur á veitingastaðnum okkar!<br>"Hraunlónið"
            </h1>
            <img src="../src/assets/Image/whiteleaf.webp" alt="Border Plante">
        </div>
    </div>
    <div class="row" id="bannerRestaurant">
        
    </div>
    <div class="row pt-5 boxShadow" id="foodMenu">
        <div class="col-5 d-flex justify-content-end align-items-center"><img class="foodImg" src="../src/assets/Image/food1.webp"></div>
        <div class="col-2 d-flex justify-content-center align-items-center whiteLeaf"><img src="../src/assets/Image/whiteleaf.webp"></div>
        <div class="col-5 d-flex justify-content-start align-items-center"><img  class="foodImg" src="../src/assets/Image/food2.webp"></div>
        <div class="col-12 mt-3 d-flex justify-content-center align-items-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar quam nibh, vitae ultricies lacus laoreet cursus. Integer<br>
        dignissim, lectus non imperdiet varius, lacus ex efficitur nulla, laoreet lacinia nibh felis et neque. Vestibulum ante ipsum <br>
        primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque venenatis congue purus, non sollicitudin lorem <br>
        porta vitae. Morbi sapien nibh, malesuada sed quam sit amet, placerat malesuada purus. Nunc et fermentum erat, a <br>
        blandit libero</p>
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center whiteLeaf"><img src="../src/assets/Image/whiteleafbas.webp"></div>
        <div class="col-6 d-flex justify-content-center align-items-center whiteLeaf"><img src="../src/assets/Image/whiteleafbas.webp"></div>
    </div>
    <div class="row" id="bannerTwoRest">

    </div>
    <div class="row pt-5 boxShadow pb-5">
        <div class="col-4 d-flex justify-content-end align-items-center whiteLeaf"><img src="../src/assets/Image/whiteleafleftrotate.webp"></div>
        <div class="col-4 d-flex flex-column justify-content-center align-items-center" id="menuTitle">
            <h2><strong>MENU</strong><br>Matseðill</h2>
            <hr>
        </div>
        <div class="col-4 d-flex justify-content-start align-items-center whiteLeaf"><img src="../src/assets/Image/whiteleafrightrotate.webp"></div>
        <div class="col-12 d-flex justify-content-evenly align-items-center"- id="menuCarte">
            <img src="../src/assets/Image/menu1.webp">
            <img src="../src/assets/Image/menu2.webp">
        </div>
    </div>
    <div class="row" id="endRestBanner">
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
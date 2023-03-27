<?php $title="Restaurant" ?>
<?php ob_start(); ?>
<div class="container-fluid p-0">
    <div class="row ">
        <div class="col-12 d-flex justify-content-center align-items-center intro">
            <h1 class="m-5 text-center"><strong>Profitez de votre diner avec nous dans notre Restaurant "Le Lagon de Lave" !</strong><br>
            Njóttu kvöldverðarins með okkur á veitingastaðnum okkar "Hraunlónið" !
            </h1>
        </div>
    </div>
    <div class="row bannerRestaurant">
        
    </div>
    <div class="row pt-5 boxShadow foodMenu">
        <div class="col-5 d-flex justify-content-end align-items-center"><img class="foodImg" src="../src/assets/Image/food1.webp" alt="Food Dish"></div>
        <div class="col-2 d-flex justify-content-center align-items-center whiteLeaf"><img src="../src/assets/Image/whiteleaf.webp" alt="Food Dish"></div>
        <div class="col-5 d-flex justify-content-start align-items-center"><img  class="foodImg" src="../src/assets/Image/food2.webp" alt="Food Dish"></div>
        <div class="col-12 mt-3 d-flex justify-content-center align-items-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar quam nibh, vitae ultricies lacus laoreet cursus. Integer<br>
        dignissim, lectus non imperdiet varius, lacus ex efficitur nulla, laoreet lacinia nibh felis et neque. Vestibulum ante ipsum <br>
        primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque venenatis congue purus, non sollicitudin lorem <br>
        porta vitae. Morbi sapien nibh, malesuada sed quam sit amet, placerat malesuada purus. Nunc et fermentum erat, a <br>
        blandit libero</p>
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center whiteLeaf"><img src="../src/assets/Image/whiteleafbas.webp" alt="Border Plant"></div>
        <div class="col-6 d-flex justify-content-center align-items-center whiteLeaf"><img src="../src/assets/Image/whiteleafbas.webp" alt="Border Plant"></div>
    </div>
    <div class="row bannerTwoRest">

    </div>
    <div class="row pt-5 boxShadow pb-5">
        <div class="col-4 d-flex justify-content-end align-items-center whiteLeaf"><img src="../src/assets/Image/whiteleafleftrotate.webp" alt="Border Plant"></div>
        <div class="col-4 d-flex flex-column justify-content-center align-items-center menuTitle">
            <h2><strong>MENU</strong><br>Matseðill</h2>
            <hr>
        </div>
        <div class="col-4 d-flex justify-content-start align-items-center whiteLeaf"><img src="../src/assets/Image/whiteleafrightrotate.webp" alt="Border Plant"></div>
        <div class="col-12 d-flex justify-content-evenly align-items-center menuCarte">
            <img src="../src/assets/Image/menu1.webp" alt="Menu 1">
            <img src="../src/assets/Image/menu2.webp" alt="Menu 2">
        </div>
    </div>
    <div class="row endRestBanner">
    </div>
    <div class="row p-4 boxShadow">
        <div class="col-3 d-flex justify-content-end">
            <img src="../src/assets/Image/whiteleafleft.webp" alt="Bordure Plante Gauche" class="borderLeaf">
        </div>
        <div class="col-6 d-flex flex-column justify-content-center align-items-center reservation">
            <h2>RESERVATION</h2>
            <p>Profitez d'une table à n'importe quel moment ! </p>
            <hr>
            <form method="POST" action="#" class="d-flex flex-column align-items-center justify-content-center">
                <input type="mail" name="mail" placeholder="Mail" id="reservationMail" class="mb-3">
                <input type="text" name="name" placeholder="Nom de Famille" id="reservationName" class="mb-3">
                <input type="date" name="date" id="reservationDate" class="mb-3">
                <button type="submit" id="validation" name="submit">Réserver</button>
            </form>
        </div>
        <div class="col-3 d-flex justify-content-start">
            <img src="../src/assets/Image/whiteleafright.webp" alt="Bordure Plante Droite" class="borderLeaf">
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
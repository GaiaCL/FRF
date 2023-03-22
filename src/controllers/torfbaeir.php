<?php
require('../src/db/dataBase.php');
require('../src/models/torfbaeir.php');

function torfbaeir(){
    $css ="<link rel='stylesheet' href='../src/assets/CSS/torfbaeir.css'>";

    $logements = selectLogements();
    $carousels = carouselLogements();
    $intros = selectTitle();
    $imgs = selectImg();
    
    require('../src/templates/header.php');
    require('../src/templates/footer.php');
    require('../src/templates/torfbaeir.php');
}
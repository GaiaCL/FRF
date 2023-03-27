<?php
require('../src/db/dataBase.php');
require('../src/models/locations.php');

function locations(){
    $css ="<link rel='stylesheet' href='../src/assets/CSS/locations.css'>";
  

    $logements = selectLogements();
    if($_GET['page'] == "Torfbaeir"){
    $carousels = carouselLogementsTorf();
    $imgs = selectImgTorf();
    }
    else if($_GET['page'] == "Loges Panoramiques"){
    $carousels = carouselLogementsLoge();
    $imgs = selectImgLoge();
    }
    else if($_GET['page'] == "Chalets"){
    $carousels = carouselLogementsChal();
    $imgs = selectImgChal();
    }
    $intros = selectTitle();
    
    
    require('../src/templates/header.php');
    require('../src/templates/footer.php');
    require('../src/templates/locations.php');
}
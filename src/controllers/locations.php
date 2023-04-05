<?php
require('../src/db/dataBase.php');
require('../src/models/locations.php');

function locations(){
    $css ="<link rel='stylesheet' href='../src/assets/CSS/locations.css'>";
  

    $logements = selectLogements();
    if($_GET['page'] == "Torfbaeir"){
    $imgs = selectImgTorf();
    $bgs = selectBgTorf();
    }
    else if($_GET['page'] == "Loges Panoramiques"){
    $imgs = selectImgLoge();
    $bgs = selectBgLoge();
    }
    else if($_GET['page'] == "Chalets"){
    $imgs = selectImgChal();
    $bgs = selectBgChalet();
    }
    $intros = selectTitle();
    
    
    require('../src/templates/header.php');
    require('../src/templates/footer.php');
    require('../src/templates/locations.php');
}
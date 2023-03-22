<?php 
require('../src/db/dataBase.php');
require('../src/models/locationsMain.php');

function locationsMain(){
    $css ="<link rel='stylesheet' href='../src/assets/CSS/locationsMain.css'>";
    $locations = selectLocation();

    require('../src/templates/header.php');
    require('../src/templates/footer.php');
    require('../src/templates/locationsMain.php');
    
}
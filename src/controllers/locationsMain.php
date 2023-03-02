<?php 
require('../src/db/dataBase.php');

function locationsMain(){
    $css ="<link rel='stylesheet' href='../src/assets/CSS/locationsMain.css'>";
    require('../src/templates/header.php');
    require('../src/templates/footer.php');
    require('../src/templates/locationsMain.php');
    
}
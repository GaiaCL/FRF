<?php 
require('../src/db/dataBase.php');

function iceland(){
    $css ="<link rel='stylesheet' href='../src/assets/CSS/iceland.css'>";
    require('../src/templates/header.php');
    require('../src/templates/footer.php');
    require('../src/templates/iceland.php');
    
}
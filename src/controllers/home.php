<?php 
require('../src/db/dataBase.php');

function home(){
    $css ="<link rel='stylesheet' href='../src/assets/CSS/home.css'>";
    require('../src/templates/header.php');
    require('../src/templates/footer.php');
    require('../src/templates/home.php');
    
}
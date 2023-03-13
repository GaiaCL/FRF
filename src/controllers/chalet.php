<?php
require('../src/db/dataBase.php');

function chalet(){
    $css ="<link rel='stylesheet' href='../src/assets/CSS/chalet.css'>";
    require('../src/templates/header.php');
    require('../src/templates/footer.php');
    require('../src/templates/chalet.php');
}
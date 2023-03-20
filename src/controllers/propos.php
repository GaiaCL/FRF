<?php
require('../src/db/dataBase.php');

function propos(){
    $css ="<link rel='stylesheet' href='../src/assets/CSS/propos.css'>";
    require('../src/templates/header.php');
    require('../src/templates/footer.php');
    require('../src/templates/propos.php');
}
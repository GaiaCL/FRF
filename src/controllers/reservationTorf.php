<?php
require('../src/db/dataBase.php');
require('../src/models/reservationTorf.php');

function reservationTorf(){
    $css ="<link rel='stylesheet' href='../src/assets/CSS/reservationTorf.css'>";
    require('../src/templates/header.php');
    require('../src/templates/footer.php');
    require('../src/templates/reservationTorf.php');
}
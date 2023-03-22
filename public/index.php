<?php


    
if(!isset($_GET['page'])) {
    require('../src/controllers/home.php');
    home();
    }
     else if(isset($_GET['page'])) {
    $page = strval($_GET['page']);
        if ($page == "Locations"){
            require('../src/controllers/locationsMain.php');
            locationsMain();
        }
        else if ($page == "Torfbaeir"){
            require('../src/controllers/torfbaeir.php');
            torfbaeir();
        }
        else if ($page == "Loges Panoramiques"){
            require('../src/controllers/loges.php');
            loges();
        }
        else if ($page == "Chalets"){
            require('../src/controllers/chalet.php');
            chalet();
        }
        else if ($page == "Restaurant"){
            require('../src/controllers/restaurant.php');
            restaurant();
        }
        else if ($page == "Activite"){
            require('../src/controllers/activite.php');
            activite();
        }
        else if ($page == "Team"){
            require('../src/controllers/team.php');
            team();
        }
        else if ($page == "Contact"){
            require('../src/controllers/contact.php');
            contact();
        }
        else if ($page == "Propos"){
            require('../src/controllers/propos.php');
            propos();
        }
        else if ($page == "Iceland"){
            require('../src/controllers/iceland.php');
            iceland();
        }
        else if ($page == "Avis"){
            require('../src/controllers/avis.php');
            avis();
        }
        else if ($page == "Carrier"){
            require('../src/controllers/carrier.php');
            carrier();
        }
        else if ($page == "Condition"){
            require('../src/controllers/condition.php');
            condition();
        }
        else if ($page == "FREYJA" || $page == "NJORDUR" || $page == "MAGNI" || $page == "FRIGG" || $page == "FREYR" ){
            require('../src/controllers/reservationTorf.php');
            reservationTorf();
        }
        else if ($page == "Home"){
            require('../src/controllers/home.php');
            home();
        }
}
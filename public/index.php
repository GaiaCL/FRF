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
        else if ($page == "Loges"){
            require('../src/controllers/loges.php');
            loges();
        }
        else if ($page == "Home"){
            require('../src/controllers/home.php');
            home();
        }
}
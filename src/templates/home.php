<?php $title = "Acceuil" ?>
<?php ob_start(); ?>

<!-- Container Start -->
<div class="container-fluid p-0 m-0">

    <!--1st Row start -->
    <div class="row" id="headerHome">
        <div class="col-9"></div>
        <div class="col-2 d-flex flex-column align-items-center justify-content-center" id="frontHead">
            <img src="../src/assets/Image/islandiccottage.webp" alt="Chalets Islandais Logo">
            <p>- Chalets -<br>
            - Loges de Verres -<br>
            - Torfbæir -<br></p>
            <p>Situés à Reykjavick</p>
            <div class="socials">
                <a href=""><i class="fa-brands fa-facebook fa-3x m-1"></i></a>
                <a href=""><i class="fa-brands fa-twitter fa-3x m-1"></i></a>
                <a href=""><i class="fa-brands fa-instagram fa-3x m-1"></i></a>
            </div>
        </div>
    </div>
    <!-- 1st Row end -->

    <!-- 2nd Row start -->
    <div class="row">
        <div class="col-12 d-flex m-5">
            <div class="col-9" id="textPresentation">
                <p>Bienvenue aux Chalets Islandais, nous croyons à la création d'espace pour qui voudrait s'évader à travers le monde 
                    magique qu'est l'Islande. Ici nous avons créés pour vous la plus belle expérience que vous pourrez vivre dans notre Pays.
                    Immergez-vous à travers les forêts sauvages, découvrez chaque oeuvre d'art que la nature aura à vous offrir et juste pour un instant
                    libérez-vous de toute mauvaise énergie, respirez et détendez-vous. </p>
                <hr>
                <p>Velkomin í Íslenskt sumarhús, við trúum á að skapa rými fyrir þann sem vill komast í gegnum töfraheim Íslands. Hér gerðum
                    við fyrir þig fallegustu upplifun sem þú getur upplifað í landinu okkar. Sökkva þér niður í villtum skógum, uppgötvaðu hvert
                    einasta listaverk sem náttúran hefur upp á að bjóða og losaðu þig um stund frá öllu til að anda og slaka á.</p>
            </div>
            <div class="col-3 text-center">
                <img src="../src/assets/Image/icelandmap.webp" alt="Map de l'Islande">
            </div>
        </div>
    </div>
    <!-- 2nd Row end -->

    <!-- 3rd Row start -->
    <div class="row d-flex justify-content-center">
        <div class="col-8 text-center mt-5 threeList">
            <img class="m-4 listImg" src="../src/assets/Image/img1.webp" alt="Torfbaeir Jour">
            <img class="m-4 listImg" src="../src/assets/Image/img2.webp" alt="Chalet Noir dans une forêt">
            <img class="m-4 listImg" src="../src/assets/Image/img3.webp" alt="Chalet dans une forêt de nuit">
            <p>Les plus beaux Chalets, Maisons d'Hôtes et Torfbær d'Islande.</p>
        </div>
    </div>
    <!-- 3rd Row end -->

    <!-- 4th Row start -->
    <div class="row mt-5 p-4 d-flex justify-content-center" id="icelandReyk">
        <div class="col-5 d-flex flex-column justify-content-center text-left ms-3 headertxt">
            <h2>ICELAND</h2>
            <p>Iceland, island country located in the North Atlantic Ocean. Lying on
            the constantly active geologic border between North America and Europe,
            Iceland is a land of vivid contrasts of climate, geography, and culture.
            Sparkling glaciers, such as Vatna Glacier (Vatnajökull), Europe’s
            largest, lie across its ruggedly beautiful mountain ranges; abundant hot
            geysers provide heat for many of the country’s homes and buildings and
            allow for hothouse agriculture year-round; and the offshore Gulf Stream
            provides a surprisingly mild climate for what is one of the northernmost
            inhabited places on the planet.</p>
        </div>
        <div class="col-1">
            <img src="../src/assets/Image/separateur.webp" alt="separateur">
        </div>
        <div class="col-5 d-flex flex-column justify-content-center text-right headertxt">
        <h2>REYKJAVIC</h2>
        <p>Reykjavík is the natural starting point for any visit to
        Iceland, and not undeservedly so. The capital is worldrenowned for its culture, history, and natural beauty on all
        fronts. 
        <br><br>
        From the city, many day trips can also be taken to the
        surrounding mountains, glaciers, volcanoes and hot springs.
        Day-excursions from Reykjavík include horseback riding,
        glacier climbing, river rafting, caving, whale watching, and
        more.</p>
        </div>
    </div>
    <!-- 4th Row end -->

    <!-- 5th Row start -->
    <div class="container-fluid">
    <div class="row d-flex flex-wrap  m-4">
        <div class="col-3 galleryPic">
            <img src="../src/assets/Image/gallery1.webp"  alt="Gallery Image 1">
        </div>
        <div class="col-3 galleryPic">
            <img src="../src/assets/Image/gallery2.webp"  alt="Gallery Image 2">
        </div>
        <div class="col-3 galleryPic">
            <img src="../src/assets/Image/gallery3.webp"  alt="Gallery Image 3">
        </div>
        <div class="col-3 galleryPic">
            <img src="../src/assets/Image/gallery4.webp"  alt="Gallery Image 4">
        </div>
        <div class="col-3 mt-4 galleryPic">
            <img src="../src/assets/Image/gallery5.webp"  alt="Gallery Image 5">
        </div>
        <div class="col-3 mt-4 galleryPic">
            <img src="../src/assets/Image/gallery6.webp"  alt="Gallery Image 6">
        </div>
        <div class="col-3 mt-4 galleryPic">
            <img src="../src/assets/Image/gallery7.webp"  alt="Gallery Image 7">
        </div>
        <div class="col-3 mt-4 galleryPic">
            <img src="../src/assets/Image/gallery8.webp"  alt="Gallery Image 8">
        </div>
    </div>
    </div>
    <!-- 5th Row end -->

    <!-- 6th Row start -->
    <div class="row m-5" id="newsLetterBlock">
        <div class="col-2 d-flex justify-content-center align-items-center"><img src="../src/assets/Image/whiteleafleft.webp" alt="Bordure Plante"></div>
        <div class="col-8 d-flex flex-column justify-content-center align-items-center">
            <form action="" method="post">
            <h3>Abonnez-vous à notre Newsletter !<br><strong>Ne manquez aucunes informations !</strong></h3>
                <input type="text" name="mail" placeholder="Votre Mail">
                <input type="text" name="nom" placeholder="Votre Pseudo">
                <button type="submit" id="newsletter">S'abonner</button>
            </form>
        </div>
        <div class="col-2 d-flex justify-content-center align-items-center"><img src="../src/assets/Image/whiteleafright.webp" alt="Bordure Plante"></div>
    </div>
    <!-- 6th Row end -->
</div>
<!-- Container End -->

<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
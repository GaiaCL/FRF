<?php $title = "Acceuil" ?>
<?php ob_start(); ?>

<!-- Container Start -->
<div class="container-fluid p-0 m-0">

    <!--1st Row start -->
    <div class="row ">
          <div class="col-12 headerHome d-flex flex-column justify-content-center align-items-center">
            <h1> Íslenskt sumarhús</h1>
            <h2>~ Chalets, Loges de Verres, Torfbaeir ~</h2>
          </div>         
    </div>
    <!-- 1st Row end -->

    <!-- 2nd Row start -->
    <div class="row mt-5">
            <div class="col-xl-9 col-lg-12 textPresentation text-center">
                <p>Bienvenue aux Chalets Islandais, nous croyons à la création d'espace pour qui voudrait s'évader à travers le monde 
                    magique qu'est l'Islande. Ici nous avons créés pour vous la plus belle expérience que vous pourrez vivre dans notre Pays.
                    Immergez-vous à travers les forêts sauvages, découvrez chaque oeuvre d'art que la nature aura à vous offrir et juste pour un instant
                    libérez-vous de toute mauvaise énergie, respirez et détendez-vous. </p>
                <hr>
                <p>Velkomin í Íslenskt sumarhús, við trúum á að skapa rými fyrir þann sem vill komast í gegnum töfraheim Íslands. Hér gerðum
                    við fyrir þig fallegustu upplifun sem þú getur upplifað í landinu okkar. Sökkva þér niður í villtum skógum, uppgötvaðu hvert
                    einasta listaverk sem náttúran hefur upp á að bjóða og losaðu þig um stund frá öllu til að anda og slaka á.</p>
            </div>
            <div class="col-xl-3 col-lg-12 text-center">
                <img src="../src/assets/Image/icelandmap.webp" alt="Map de l'Islande">
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
    <div class="row mt-5 p-4 d-flex justify-content-center icelandReyk">
        <div class="col-5 d-flex flex-column justify-content-center text-left ms-3 headertxt">
            <h2>ISLANDE</h2>
            <p>L'Islande, pays insulaire situé dans l'océan Atlantique Nord. Allongé sur
            la frontière géologique constamment active entre l'Amérique du Nord et l'Europe,
            L'Islande est une terre de contrastes saisissants de climat, de géographie et de culture.
            Des glaciers étincelants, tels que le glacier Vatna (Vatnajökull), le
            le plus grand, s'étendent sur ses magnifiques chaînes de montagnes accidentées. Chauds et abondants
            les geysers fournissent de la chaleur à de nombreuses maisons et bâtiments du pays et
            permettre l'agriculture sous serre toute l'année.</p>
        </div>
        <div class="col-1">
            <img src="../src/assets/Image/separateur.webp" alt="separateur">
        </div>
        <div class="col-5 d-flex flex-column justify-content-center text-right headertxt">
        <h2>REYKJAVIC</h2>
        <p>Reykjavík est le point de départ naturel de toute visite en
        Islande, et pas sans raison. La capitale est mondialement connue pour sa culture, son histoire et sa beauté naturelle sur tous
        fronts. 
        <br><br>
        De la ville, de nombreuses excursions d'une journée peuvent être effectuées vers les
        montagnes environnantes, glaciers, volcans et sources chaudes.
        Les excursions d'une journée au départ de Reykjavík incluent l'équitation,
        escalade sur glacier, rafting, spéléologie, observation des baleines et
        plus.</p>
        </div>
    </div>
    <!-- 4th Row end -->

    <!-- 5th Row start -->
    <div class="row p-5 pb-2 d-flex flex-wrap ">
        <div class="col-3 galleryPic mb-3">
            <img src="../src/assets/Image/gallery1.webp"  alt="Gallery Image 1">
        </div>
        <div class="col-3 galleryPic mb-3">
            <img src="../src/assets/Image/gallery2.webp"  alt="Gallery Image 2">
        </div>
        <div class="col-3 galleryPic mb-3">
            <img src="../src/assets/Image/gallery3.webp"  alt="Gallery Image 3">
        </div>
        <div class="col-3 galleryPic mb-3">
            <img src="../src/assets/Image/gallery4.webp"  alt="Gallery Image 4">
        </div>
        <div class="col-3 galleryPic">
            <img src="../src/assets/Image/gallery5.webp"  alt="Gallery Image 5">
        </div>
        <div class="col-3 galleryPic">
            <img src="../src/assets/Image/gallery6.webp"  alt="Gallery Image 6">
        </div>
        <div class="col-3 galleryPic">
            <img src="../src/assets/Image/gallery7.webp"  alt="Gallery Image 7">
        </div>
        <div class="col-3 galleryPic">
            <img src="../src/assets/Image/gallery8.webp"  alt="Gallery Image 8">
        </div>
    </div>

    <!-- 5th Row end -->

    <!-- 6th Row start -->
    <div class="row m-5 newsLetterBlock">
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
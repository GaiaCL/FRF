<?php $title = "Acceuil" ?>
<?php ob_start(); ?>

<!-- Container Start -->
<div class="container-fluid p-0 m-0">

    <!--1st Row start -->
    <div class="row headerHome">
          <div class="col-12 d-flex flex-column justify-content-center align-items-center titleIntro">
          </div>         
    </div>
    <!-- 1st Row end -->
   <div class="row blockOne d-flex flex-column t align-items-center">
    <div class="col-12 text-center" style="margin-top: 5em;">
    <h2>Bienvenue aux <strong>Chalets Islandais</strong></h2>
    </div>
        <div class="col-5">
        <p class="welcome p-5" >Nous croyons à la création d'espace pour qui voudrait s'évader à travers le monde 
                        magique qu'est l'Islande. Ici nous avons créés pour vous la plus belle expérience que vous pourrez vivre dans notre Pays.
                        Immergez-vous à travers les forêts sauvages, découvrez chaque oeuvre d'art que la nature aura à vous offrir et juste pour un instant
                        libérez-vous de toute mauvaise énergie, respirez et détendez-vous. </p>
        </div>
        <div class="col-12">
            <img src="../assets/Image/doubleImg.webp" alt="">
        </div>
   </div>
</div>
<!-- Container End -->

<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
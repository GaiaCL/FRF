<?php $title = "Acceuil" ?>
<?php ob_start(); ?>

<!-- Container Start -->
<div class="container-fluid p-0 m-0">

    <!--1st Row start -->
    <!-- 1st Row end -->
   <div class="row blockOne d-flex flex-column t align-items-center">
    <div class="col-12" style="height:60em;"></div>
    <div class="col-12 text-center" style="margin-top: 5em;">
    <h2>Bienvenue aux <strong>Chalets Islandais</strong></h2>
    </div>
        <div class="col-5 ms-5">
        <p class="welcome p-5 ms-5 mt-5" >Nous croyons à la création d'espace pour qui voudrait s'évader à travers le monde 
                        magique qu'est l'Islande. Ici nous avons créés pour vous la plus belle expérience que vous pourrez vivre dans notre Pays.
                        Immergez-vous à travers les forêts sauvages, découvrez chaque oeuvre d'art que la nature aura à vous offrir et juste pour un instant
                        libérez-vous de toute mauvaise énergie, respirez et détendez-vous. </p>
                        <img src="../src/assets/Image/img3.webp" alt="" class="imgWelcome" >
                        <img src="../src/assets/Image/img2.webp" alt="" class="imgWelcome" id="imgWelcomeTwo">    
        </div>
        
   </div>
   <div class="row blockTwo">
        <div class="col-6 ps-5 d-flex flex-column justify-content-start">
            <p class="mb-5 ms-5">L'Islande, pays insulaire situé dans l'océan Atlantique Nord. Allongé sur
                la frontière géologique constamment active entre l'Amérique du Nord et l'Europe,
                L'Islande est une terre de contrastes saisissants de climat, de géographie et de culture.
                Des glaciers étincelants, tels que le glacier Vatna (Vatnajökull), le
                le plus grand, s'étendent sur ses magnifiques chaînes de montagnes accidentées ; chaud abondant
                les geysers fournissent de la chaleur à de nombreuses maisons et bâtiments du pays et
                permettre l'agriculture sous serre toute l'année; et le Gulf Stream au large
                fournit un climat étonnamment doux pour ce qui est l'un des plus septentrionaux
                lieux habités de la planète.</p>
        </div>
   </div>
   <div class="row blockThree">
        <div class="col d-flex flex-column  justify-content-center align-items-center">
            <h2 class="mb-5">Souscrivez à notre Newsletter !</h2>
            <form method="POST" action="" class="d-flex flex-column justify-content-center align-items-center">
                <div class="form-group mb-4">
                <label class="mail"><span class="p-1">Mail</span>
                <input type="text" name="mail" id="mail" placeholder="Saisissez votre Mail"></label>
                </div>

                <div class="form-group">
                <label class="username"><span id="username" class="p-1">Prénom</span>
                <input type="text" name="username" id="username" placeholder="Saisissez votre Prénom"></label>
                </div>

                <div class="form-group">
                    <button class="button-83 m-3" role="button">S'abonner</button>
                </div>
            </form>
        </div>
   </div>
</div>
<!-- Container End -->

<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
<?php $title = "Locations"; ?>
<?php ob_start(); ?>
<div class="container-fluid p-0"> 
    <div class="row" style="margin-top: 9em;">
        <div class="col-12 d-flex justify-content-center align-items-center" id="introRent">
            <img src="../src/assets/Image/whiteleaf.png" width="300" >
            <h1 class="m-5"><strong>Choissisez et Louez le parfait logement pour votre visite en Islande.</strong><br>
                Veldu og leigðu hið fullkomna húsnæði fyrir heimsókn þína á Íslandi.
            </h1>
            <img src="../src/assets/Image/whiteleaf.png" width="300">
        </div>
    </div>
    <div class="row d-flex align-items-center justify-content-center mb-5 mt-5 " style="position:relative">
        <div class="col-8 p-0">
        <video autoplay muted loop class="videoBG">
        <source src="../src/assets/video/renttrim.mp4" type="video/mp4">
        </video>
        </div>
        <div class="col-8 text-center pt-4 location" style="min-height:23em;position:absolute">
            <h2>~ Torfbæir ~</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar quam nibh, vitae ultricies
            lacus laoreet cursus.Integer dignissim, lectus non imperdiet varius, lacus ex efficitur nulla,
            laoreet lacinia nibh felis et neque.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia curae; Pellentesque venenatis congue purus, non sollicitudin lorem porta vitae. </p>
            <a href="index.php?page=Torfbaeir" class="seeMore">En Savoir Plus </a>
        </div>
    </div>
    <div class="row d-flex align-items-center justify-content-center mb-5" style="position:relative">
        <div class="col-8 p-0">
            <video autoplay muted loop class="videoBG">
            <source src="../src/assets/video/guesthouse.mp4" type="video/mp4">
            </video>
        </div>
        <div class="col-8 text-center pt-4 location" style="min-height:23em;position:absolute;">
            <h2>~ Loges Panoramiques ~</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar quam nibh, vitae ultricies
            lacus laoreet cursus.Integer dignissim, lectus non imperdiet varius, lacus ex efficitur nulla,
            laoreet lacinia nibh felis et neque.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia curae; Pellentesque venenatis congue purus, non sollicitudin lorem porta vitae. </p>
            <a href="index.php?page=Loges" class="seeMore">En Savoir Plus </a>
        </div>
    </div>
    <div class="row d-flex align-items-center justify-content-center mb-5" style="position:relative">
        <div class="col-8 p-0">
            <video autoplay muted loop class="videoBG" ">
            <source src="../src/assets/video/cottage.mp4" type="video/mp4">
            </video>
        </div>
        <div class="col-8 text-center pt-4 location" style="min-height:23em;position:absolute;">
            <h2>~ Chalaîs ~</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar quam nibh, vitae ultricies
            lacus laoreet cursus.Integer dignissim, lectus non imperdiet varius, lacus ex efficitur nulla,
            laoreet lacinia nibh felis et neque.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia curae; Pellentesque venenatis congue purus, non sollicitudin lorem porta vitae. </p>
            <a href="" class="seeMore">En Savoir Plus </a>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
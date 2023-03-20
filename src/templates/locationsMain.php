<?php $title = "Locations"; ?>
<?php ob_start(); ?>
<div class="container-fluid p-0"> 
    <div class="row" id="introLocation">
        <div class="col-12 d-flex justify-content-center align-items-center" id="introRent">
            
            <h1 class="m-5"><strong>Choisissez et Louez le parfait logement pour votre visite en Islande.</strong><br>
                Veldu og leigðu hið fullkomna húsnæði fyrir heimsókn þína á Íslandi.
            </h1>
            
        </div>
    </div>
    <div class="row d-flex align-items-center justify-content-center mb-5 mt-5 videoPosition">
        <div class="col-8 p-0">
        <video autoplay muted loop class="videoBG">
        <source src="../src/assets/video/renttrim.mp4" type="video/mp4">
        </video>
        </div>
        <div class="col-8 text-center pt-4 location">
            <h2>~ Torfbæir ~</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar quam nibh, vitae ultricies
            lacus laoreet cursus.Integer dignissim, lectus non imperdiet varius, lacus ex efficitur nulla,
            laoreet lacinia nibh felis et neque.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia curae; Pellentesque venenatis congue purus, non sollicitudin lorem porta vitae. </p>
            <a href="index.php?page=Torfbaeir" class="seeMore">En Savoir Plus </a>
        </div>
    </div>
    <div class="row d-flex align-items-center justify-content-center mb-5 videoPosition">
        <div class="col-8 p-0">
            <video autoplay muted loop class="videoBG">
            <source src="../src/assets/video/guesthouse.mp4" type="video/mp4">
            </video>
        </div>
        <div class="col-8 text-center pt-4 location">
            <h2>~ Loges Panoramiques ~</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar quam nibh, vitae ultricies
            lacus laoreet cursus.Integer dignissim, lectus non imperdiet varius, lacus ex efficitur nulla,
            laoreet lacinia nibh felis et neque.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia curae; Pellentesque venenatis congue purus, non sollicitudin lorem porta vitae. </p>
            <a href="index.php?page=Loges" class="seeMore">En Savoir Plus </a>
        </div>
    </div>
    <div class="row d-flex align-items-center justify-content-center mb-5 videoPosition">
        <div class="col-8 p-0">
            <video autoplay muted loop class="videoBG">
            <source src="../src/assets/video/cottage.mp4" type="video/mp4">
            </video>
        </div>
        <div class="col-8 text-center pt-4 location">
            <h2>~ Chalets ~</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar quam nibh, vitae ultricies
            lacus laoreet cursus.Integer dignissim, lectus non imperdiet varius, lacus ex efficitur nulla,
            laoreet lacinia nibh felis et neque.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia curae; Pellentesque venenatis congue purus, non sollicitudin lorem porta vitae. </p>
            <a href="index.php?page=Chalets" class="seeMore">En Savoir Plus </a>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
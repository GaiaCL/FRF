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
    <?php foreach($locations as $location) { ?>
    <div class="row d-flex align-items-center justify-content-center mb-5 mt-5 videoPosition">
        <div class="col-8 p-0">
        <video autoplay muted loop class="videoBG">
        <source src="<?= $location['chemin_videos']?>" type="video/mp4">
        </video>
        </div>
        <div class="col-8 text-center pt-4 location">
            <h2><?= $location['nom_cat'] ?></h2>
            <p><?= $location['description_cat']?></p>
            <a href="index.php?page=<?= $location['nom_cat'] ?>&id=<?= $location['id_categories']?>" class="seeMore">En Savoir Plus </a>
        </div>
    </div>
    <?php } ?>
    
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
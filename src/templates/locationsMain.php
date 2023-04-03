<?php $title = "Locations"; ?>
<?php ob_start(); ?>
<div class="container-fluid p-0"> 
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center intro">
            
            <h1 class="m-5"><strong>Choisissez et Louez le parfait logement pour votre visite en Islande.</strong><br>
                Veldu og leigðu hið fullkomna húsnæði fyrir heimsókn þína á Íslandi.
            </h1>
            
        </div>
    </div>
    <?php foreach($locations as $location) { ?>
    <div class="row d-flex align-items-center justify-content-center videoPosition">
        <div class="col-12 p-0">
        <video autoplay muted loop class="videoBG">
        <source src="<?= $location['chemin_videos']?>" type="video/mp4">
        </video>
        </div>
        <div class="col-8 pt-4 location d-flex flex-column justify-content-center align-items-center">
            <h2><?= $location['nom_cat'] ?></h2>
            <p><?= $location['description_cat']?></p>
            <button class="button-83 m-3 d-flex align-items-center justify-content-center" role="button"><a href="index.php?page=<?= $location['nom_cat'] ?>&id=<?= $location['id_categories']?>">En Savoir Plus </a></button>
        </div>
    </div>
    <div class="col-12 locationBetween">

    </div>
    <?php } ?>
    
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
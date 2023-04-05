<?php $title = $_GET['page'];
ob_start();?>
<div class="container-fluid p-0">
    <div class="row locInt d-flex align-items-end" 
        <?php foreach($bgs as $bg){ ?>
                style="background-image:url(<?= $bg['chemin_images'] ?>)"
        <?php } ?>
        >
            <div class="col-12 d-flex justify-content-center align-items-center introLoc">
                
                <h1 ><?= $_GET['page'] ?></h1>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-end" style="height:10em;">
            <i class="fa-solid fa-chevron-down fa-bounce fa-3x iconDown"></i>
             </div>
    </div>
    <div class="row p-0">
        <div class="col-12 p-0 dispoLoc" >
            <h2>Nos <?= $_GET['page'] ?> disponibles.</h2>
        </div>
    </div>
    <div class="row m-5 p-0 logement">
        <?php foreach($logements as $logement){ ?>
        <div class="col" >
            <div class="profile-card-4 text-center" ><img src="<?= $logement['chemin_images'] ?>" alt="Logements" class="img img-responsive">
                    <div class="profile-content">
                        <div class="profile-name"><?= $logement['nom_cat'] ?> <?= $logement['nom_logements'] ?> 
                            <p>Capacité : <?= $logement['capacite'] ?> -- Chambre(s) : <?= $logement['chambres']?></p>
                        </div>
                        
                        <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-xs-4">
                            <div class="profile-overview">
                                <p>Tarifs</p>
                                <h4><?= $logement['prix_jour'] ?>€<strong>/Jour</strong><br/> <?= $logement['prix_semaine'] ?>€<strong>/Semaine</strong></h4></div>
                            </div>
                            <a href="index.php?page= <?= $logement['nom_logements'] ?>" class="button-83">Réserver</a>
                        </div>
                    </div>
                </div>
        </div>
        <?php }?>
    </div>
    
    <div class="row p-0" >
        <?php foreach($imgs as $img){ ?>
        <div class="col-12 d-flex flex-column justify-content-center align-items-start ps-5 bannerBtm" style="background-image:url(<?= $img['chemin_images'] ?>)">
            <h2><?= $img['nom_images'] ?></h2>
            <p class="pt-5"><?= $img['description_images'] ?></p>
        </div>
        <?php } ?>
    </div>
</div>
<?php $content = ob_get_clean();
require('layout.php');?>
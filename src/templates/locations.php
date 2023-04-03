<?php $title = $_GET['page'];
ob_start();?>
<div class="container-fluid p-0">
    <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center intro">
                
                <h1 class="m-5"><strong><?= $_GET['page'] ?></strong><br></h1>
                
            </div>
    </div>
    <div class="row locationAbout d-flex justify-content-end">
        <div class="col-4 textCol">
            <?php foreach($intros as $intro){ ?>
                <p class="introText"><?= $intro['description_cat'] ?></p>
            <?php } ?>
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
                                <h4><?= $logement['prix_jour'] ?>€/Jour<br/> <?= $logement['prix_semaine'] ?>€/Semaine</h4></div>
                            </div>
                            <a href="index.php?page= <?= $logement['nom_logements'] ?>" class="bttnLoc">Réserver</a>
                        </div>
                    </div>
                </div>
        </div>
        <?php }?>
    </div>
    
    <div class="row p-0" >
        <?php foreach($imgs as $img){ ?>
        <div class="col-12 d-flex flex-column justify-content-center align-items-center bannerBtm" style="background-image:url(<?= $img['chemin_images'] ?>)">
            <h2><?= $img['nom_images'] ?></h2>
            <p class="p-5"><?= $img['description_images'] ?></p>
        </div>
        <?php } ?>
    </div>
</div>
<?php $content = ob_get_clean();
require('layout.php');?>
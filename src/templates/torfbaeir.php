<?php $title ="Torfbaeir";
ob_start();?>
<div class="container-fluid p-0" id="contTorf">
    <div class="row mb-5 p-0">
        <div class="col-7 p-0" id="carouselTorf">
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach($carousels as $carousel){ ?>
                <div class="carousel-item active">
                <img src= "<?= $carousel['chemin_images'] ?>" alt="Torfbaeir Image Carousel" class="d-block w-100">
                </div>
                <?php } ?>
            </div>
            </div>
        </div>
        <div class="col-5 d-flex flex-column align-items-center justify-content-center p-5" id="textTorf">
            <?php foreach($intros as $intro){ ?>
            <h1 class="mb-5"><?= $intro['nom_cat'] ?></h1>
            <p><?= $intro['description_cat'] ?></p>
            <?php } ?>
        </div>
    </div>
    <div class="row p-0">
        <div class="col-12 p-0" id="dispoTorf">
            <h2>Nos <?= $_GET['page'] ?> disponibles.</h2>
        </div>
    </div>
    <div class="row m-5 p-0">
        <?php foreach($logements as $logement){ ?>
        <div class="col">
            <div class="profile-card-4 text-center"><img src="<?= $logement['chemin_images'] ?>" alt="" class="img img-responsive">
                    <div class="profile-content">
                        <div class="profile-name"><?= $logement['nom_cat'] ?> <?= $logement['nom_logements'] ?> 
                            <p>Capacité : <?= $logement['capacite'] ?> -- Chambre(s) : <?= $logement['chambres']?></p>
                        </div>
                        <div class="profile-description"><?= $logement['description_logements']?></div>
                        <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-xs-4">
                            <div class="profile-overview">
                                <p>Tarifs</p>
                                <h4><?= $logement['prix_jour'] ?>€/Jour<br/> <?= $logement['prix_semaine'] ?>€/Semaine</h4></div>
                            </div>
                            <a href="index.php?page= <?= $logement['nom_logements'] ?>" class="bttnTorf">Réserver</a>
                        </div>
                    </div>
                </div>
        </div>
        <?php }?>
    </div>
    
    <div class="row mb-5 p-0" >
        <?php foreach($imgs as $img){ ?>
        <div class="col-6 pool p-5 text-center p-0">
            <h2><?= $img['nom_images'] ?></h2>
            <p><?= $img['description_images'] ?></p>
        </div>
        <div class="col-6 pool p-0">
            <img src="<?= $img['chemin_images'] ?>" alt="">
        </div>
        <?php } ?>
    </div>
</div>
<?php $content = ob_get_clean();
require('layout.php');?>
<?php $title="Activités"; ?>
<?php ob_start(); ?>
    <div class="container-fluid p-0">
        <div class="row introActivite">
            <div class="col-12 d-flex justify-content-center align-items-center introAct">
                <img src="../src/assets/Image/whiteleaf.webp" alt="Border Plante">
                <h1 class="m-5 text-center"><strong>Tout autour de l'Islande, profitez de nos 
                <br>
                    activités multiples vous assurant le meilleur séjour !</strong>
                <br>
                    Allt um Ísland, nýttu þér margvíslega starfsemi okkar til að tryggja þér bestu dvölina!
                </h1>
                <img src="../src/assets/Image/whiteleaf.webp" alt="Border Plante">
            </div>
        </div>
        <div class="row p-0 m-0" id="activiteImg">
            <div class="col-12 d-flex justify-content-center align-items-start" id="icecaves">
                <h2 class="activiteText m-0"> <a href=""> Découverte des Grottes Gelées </a> </h2>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-start mt-5" id="horses">
                <h2 class="activiteText m-0"> <a href=""> Promenade à Cheval  </a> </h2>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-start mt-5" id="scuba">
                <h2 class="activiteText m-0"> <a href=""> Visiter les Fonds Marins  </a> </h2>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-start mt-5" id="blueLagoon">
                <h2 class="activiteText m-0"> <a href=""> Se relaxer au sein du Lagon Bleu  </a> </h2>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-start mt-5" id="volcanoes">
                <h2 class="activiteText m-0"> <a href=""> Découverte des Volcans Islandais  </a> </h2>
            </div>
        </div>
        <div class="row introActivite mt-0 boxShadow" >
            <div class="col-12 d-flex justify-content-center align-items-center introAct">
                <img src="../src/assets/Image/whiteleaf.webp" alt="Border Plante">
                <h1 class="m-5 text-center"><strong>Retrouvez toutes les activités disponibles dans cette carte intéractive !</strong>
                <br>
                Finndu alla starfsemi sem er í boði á þessu gagnvirka korti !
                </h1>
                <img src="../src/assets/Image/whiteleaf.webp" alt="Border Plante">
            </div>
        </div>
        <div class="row">
            <div class="col-12" id="map">

            </div>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
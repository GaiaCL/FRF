<?php $title ="Chalets";?>
<?php ob_start(); ?>
<div class="container-fluid p-0" id="contChalets">

    <div class="row">
        <div class="col-7" id="carouselChalets">
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="../src/assets/Image/Chalet.webp" alt="Chalets Image Carousel" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/Chalet2.webp" alt="Chalets Image Carousel" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/Chalet3.webp" alt="Chalets Image Carousel" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/Chalet4.webp" alt="Chalets Image Carousel" class="d-block w-100">
                </div>
            </div>
            </div>
        </div>
        <div class="col-5 d-flex flex-column align-items-center justify-content-center p-5" id="textChalets">
            <h1 class="mb-5">Chalets Islandais</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Cras et fringilla arcu, a ultricies ipsum. Nam vitae fermentum nisi, 
                lacinia scelerisque mi. Nam non odio non lorem cursus interdum lobortis 
                id lectus. Sed fringilla scelerisque neque vitae accumsan. 
                <br/><br/>
                Duis at turpis 
                nec odio lacinia gravida vel nec felis. Suspendisse consectetur lectus luctus 
                lorem gravida mattis. Donec scelerisque mauris at ipsum sodales, id iaculis erat semper. 
                Pellentesque et tincidunt nisl, et fermentum mi. Vestibulum ac hendrerit tortor. Phasellus 
                sagittis in justo quis gravida.</p>
        </div>
    </div>
    <div class="row p-0">
        <div class="col-12 p-0" id="dispoChalets">
            <h2>Nos Chalets disponibles.</h2>
        </div>
    </div>
    <div class="row m-5 p-0">
        <div class="col">
            <div class="profile-card-4 text-center"><img src="../src/assets/Image/chaletdispo1.webp" alt="Card Chalet Disponible" class="img img-responsive">
                    <div class="profile-content">
                        <div class="profile-name">Chalet FREYJA 
                            <p>Capacité : 5 -- Chambre(s) : 2</p>
                        </div>
                        <div class="profile-description">Chalet Rustique au milieu de la campagne
                                                        Islandaise, entouré des montagnes enneigées.
                                                        Ce chalet contient une cuisine aménagée, une
                                                        salle de bain avec douche à l'italienne et 
                                                        de 2 chambres.
                        </div>
                        <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-xs-4">
                            <div class="profile-overview">
                                <p>Tarifs</p>
                                <h4>250€/3Jours<br/> 600€/Semaine</h4></div>
                            </div>
                            <button type="button" class="btn btn-dark bttnChalets" >Réserver</button>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col">
            <div class="profile-card-4 text-center"><img src="../src/assets/Image/chaletdispo2.webp" alt="Card Chalet Disponible" class="img img-responsive">
                    <div class="profile-content">
                        <div class="profile-name">Chalet NJÖRÐUR
                            <p>Capacité : 8 -- Chambre(s) : 3</p>
                        </div>
                        <div class="profile-description mb-4">Chalet forestier. Parfait pour un gros groupe
                                                            d'amis ou une grande famille, comprend 3
                                                            chambres, 2 salles de bains avec baignoires, une
                                                            cuisine américaine et un salon accompagné de sa
                                                            cheminée.
                        </div>
                        <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-xs-4">
                            <div class="profile-overview">
                                <p>Tarifs</p>
                                <h4>300€/3Jours<br/> 800€/Semaine</h4></div>
                            </div>
                            <button type="button" class="btn btn-dark bttnChalets">Réserver</button>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col">
            <div class="profile-card-4 text-center"><img src="../src/assets/Image/chaletdispo3.webp" alt="Card Chalet Disponible" class="img img-responsive">
                    <div class="profile-content">
                        <div class="profile-name">Chalet MAGNI 
                            <p>Capacité : 3 -- Chambre(s) : 2</p>
                        </div>
                        <div class="profile-description mb-5">Chalet hivernal 100% eco-responsable.
                                                        Munis de panneau-solaire, d'une salle de
                                                        bain alimentée en eau thermale souterraine
                                                        et d'une veranda.
                        </div>
                        <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-xs-4">
                            <div class="profile-overview">
                                <p>Tarifs</p>
                                <h4>400€/3Jours<br/> 1200€/Semaine</h4></div>
                            </div>
                            <button type="button" class="btn btn-dark bttnChalets">Réserver</button>
                        </div>
                    </div>
                </div>
        </div>
        
        
    </div>
    <div class="row" id="bannerCottage">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
        <h2>A la découverte de l'Islande</h2>
            <p>Quoi de mieux pour une découverte de cette magnifique Terre de Feu et de Glace<br>
                qu'un chalais perdu au milieu des campagnes enneigées Islandaises.<br>
                Profitez d'un instant pur en immersion dans la nature profonde de notre 
                magnifique pays.
            </p>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
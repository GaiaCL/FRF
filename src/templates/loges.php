<?php $title ="Loges Panoramiques";
ob_start();?>
<div class="container-fluid p-0" id="contLoges">

    <div class="row">
        <div class="col-7" id="carouselLoges">
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="../src/assets/Image/loges1.webp" alt="Loges Image Carousel" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/loges2.webp" alt="Loges Image Carousel" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/loges3.webp" alt="Loges Image Carousel" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/loges4.webp" alt="Loges Image Carousel" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/loges5.webp" alt="Loges Image Carousel" class="d-block w-100">
                </div>
            </div>
            </div>
        </div>
        <div class="col-5 d-flex flex-column align-items-center justify-content-center p-5" id="textLoges">
            <h1 class="mb-5">Loges Panoramiques</h1>
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
    <div class="row" id="dispoLoges">
        <div class="col-6 me-5 d-flex justify-content-end align-items-center cardLoges" >
            <div class="col-7 text-center">
            <h2>Formule "Víkinga Helgisiði" </h2>
            <p>Vivez une expérience inoubliable <br>
                                        au coeur des Terres Vikings de l'Islande.<br>
                                        Contemplez les Aurores Boréales à travers <br>
                                        le verre panoramique de nos Loges.<br>
                                        Cette formule comprend une loge 1 personne. 
            </p>
                <div class="profile-overview">
                    <button type="button" class="btn btn-dark">En Savoir Plus</button>
                </div>
                
            </div>                
        </div>
        <div class="col-12 d-flex justify-content-end align-items-center cardLoges" >
            <div class="col-7 text-center" >
                <h2>Formule "Símtal Freyja" </h2>
                <p>La Formule parfaite pour un séjour <br> 
                                        en amoureux. Profitez d'un bain <br> 
                                        thermale, chauffé grâce aux  <br>
                                        sources chaudes du Volcan Islandais. <br>
                                        Cette formule comprend
                                        une loge 2 personnes. 
                </p>
                    <div class="profile-overview">
                        <button type="button" class="btn btn-dark">En Savoir Plus</button>
                    </div>
                    
            </div>  
        </div>
    </div>
    <div class="row" id="bannerLoges">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
            <h2>En dormant sous les étoiles</h2>
            <p>Igloo à cabine de verre scandinave de style viking avec ce petit plus de luxe.<br>
                Des paysages magnifiques et des vues panoramiques depuis votre lit super confortable ou<br>
                votre bain à remous privé.</p>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
require('layout.php');?>
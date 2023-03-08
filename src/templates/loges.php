<?php $title ="Loges Panoramiques";
ob_start();?>
<div class="container-fluid p-0" style="margin-top:10em;">

    <div class="row">
        <div class="col-7" id="carouselTorf">
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="../src/assets/Image/loges1.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/loges2.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/loges3.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/loges4.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/loges5.jpg" class="d-block w-100">
                </div>
            </div>
            </div>
        </div>
        <div class="col-5 d-flex flex-column align-items-center justify-content-center p-5" id="textTorf">
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
        <div class="col-6 me-5 d-flex justify-content-end align-items-center" style="background-image: url('../src/assets/Image/logesCard.jpg'); height: 276px; width: 753px;border-radius:0.5em;box-shadow: 0px 3px 16px 2px rgba(0,0,0,0.81);color:white;" >
            <div class="col-7 text-center">
            <h2 style="font-size:1.4em">Formule "Víkinga Helgisiði" </h2>
            <p style="font-size:1em">Vivez une expérience inoubliable <br>
                                        au coeur des Terres Vikings de l'Islande.<br>
                                        Contemplez les Aurores Boréales à travers <br>
                                        le verre panoramique de nos Loges.<br>
                                        Cette formule comprend une loge 1 personne. 
            </p>
                <div class="profile-overview">
                    <button type="button" class="btn btn-dark" style="width:10em;">En Savoir Plus</button>
                </div>
                
            </div>                
        </div>
        <div class="col-12 d-flex justify-content-end align-items-center" style="background-image: url('../src/assets/Image/logesCard2.jpg'); height: 276px; width: 753px;border-radius:0.5em;box-shadow: 0px 3px 16px 2px rgba(0,0,0,0.81);color:white;" >
            <div class="col-7 text-center" >
                <h2 style="font-size:1.4em">Formule "Símtal Freyja" </h2>
                <p style="font-size:1em">La Formule parfaite pour un séjour <br> 
                                        en amoureux. Profitez d'un bain <br> 
                                        thermale, chauffé grâce aux  <br>
                                        sources chaudes du Volcan Islandais. <br>
                                        Cette formule comprend
                                        une loge 2 personnes. 
                </p>
                    <div class="profile-overview">
                        <button type="button" class="btn btn-dark" style="width:10em;">En Savoir Plus</button>
                    </div>
                    
            </div>  
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
require('layout.php');?>
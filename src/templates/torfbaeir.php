<?php $title ="Torfbaeir";
ob_start();?>
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12 d-flex justify-content-center" id="titleTorf">
            <img src="../src/assets/Image/whiteleaf.png">
            <h1>Torfbaeir</h1>
            <img src="../src/assets/Image/whiteleaf.png">
        </div>
    </div>
    <div class="row">
        <div class="col-6" id="carouselTorf">
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="../src/assets/Image/gallery8.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/turfhouse.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/torfhouse3.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/torfhouse4.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/torfhouse5.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/torfhouse6.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/torfhouse7.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/torfhouse8.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="../src/assets/Image/torfhouse9.jpg" class="d-block w-100">
                </div>
            </div>
            </div>
        </div>
        <div class="col-6 d-flex align-items-center justify-content-center p-5" id="textTorf">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Cras et fringilla arcu, a ultricies ipsum. Nam vitae fermentum nisi, 
                lacinia scelerisque mi. Nam non odio non lorem cursus interdum lobortis 
                id lectus. Sed fringilla scelerisque neque vitae accumsan. Duis at turpis 
                nec odio lacinia gravida vel nec felis. Suspendisse consectetur lectus luctus 
                lorem gravida mattis. Donec scelerisque mauris at ipsum sodales, id iaculis erat semper. 
                Pellentesque et tincidunt nisl, et fermentum mi. Vestibulum ac hendrerit tortor. Phasellus 
                sagittis in justo quis gravida.</p>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
require('layout.php');?>
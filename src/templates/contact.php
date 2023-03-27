<?php $title ="Contact"; ?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center intro">
            <h1 class="m-5 text-center"><strong>Contactez-nous !</strong>
            <br>
            Hafðu samband við okkur
            </h1>
        </div>
    </div>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-6 pt-5 pb-5 d-flex align-items-center justify-content-center" id="contactForm">
            <form method="POST" action="#" class="d-flex flex-column justify-content-center align-items-center">
                <input type="text" id="name" name="name" placeholder="Entrez votre Nom Complet...">
                <input type="mail" id="mail" name="mail" placeholder="Entrez votre Mail...">
                <textarea placeholder="Vos Questions/Commentaires..." id="message"></textarea>
                <button type="submit" id="envoyer" name="submit" >Envoyer</button>
            </form> 
        </div>
        <div class="col-5 formSection text-center" id="infosContact">
                    <h2 class="mb-5">Retrouvez-nous aussi sur les Reseaux Sociaux :</h2>
                    <div class="formSection d-flex justify-content-evenly">
                        <a href=""><i class="fa-brands fa-facebook fa-5x"></i></a>
                        <a href=""><i class="fa-brands fa-twitter fa-5x"></i></a>
                        <a href=""><i class="fa-brands fa-instagram fa-5x"></i></i></a>
                    </div>
        </div>
            
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
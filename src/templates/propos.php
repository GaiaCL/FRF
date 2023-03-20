<?php $title="A propos"; ?>
<?php ob_start(); ?>
<div class="container-fluid">
<div class="row introPropos">
        <div class="col-12 d-flex justify-content-center align-items-center introPro">
            <h1 class="m-5 text-center"><strong>A Propos de Nous !</strong>
            <br>
            Um okkur !
            </h1>
        </div>
    </div>
    <div class="row d-flex flex-column justify-content-center align-items-center mt-5">
        <div class="col-7 d-flex justify-content-evenly align-items-center aboutUs" id="aboutOne">
            <p>Nous sommes un groupe situé à Reykjavik (originaire de Suisse et d'Allemagne)
                qui a eu l'idée en 2015 de créer ensemble une escapade absolument unique et romantique
                en Islande où il est possible d'observer les aurores boréales et le soleil de minuit, ou de profiter
                d'un séjour dans la belle terre d'Islande.<br><br>

                C'est pourquoi nous avons créer Íslenskt sumarhús. 
                Nos maisons ont été les premières en Islande (2017) où il 
                est possible de sejourner dans différents types de maisons possédant
                chacune d'entres-elles une particularité. 
                <br><br>
                De la maisons en Chaume traditionnelle,
                à la Loge Panoramique en Verre ! 
            </p>
                <img src="../src/assets/Image/about1.webp" alt="">
        </div>
        <div class="col-7 d-flex justify-content-evenly align-items-center aboutUs" id="aboutTwo">
            <img src="../src/assets/Image/about2.webp" alt="">
            <p>Le point le plus important était que nos invités vivent une expérience incroyable,
                 confortable et inoubliable avec suffisamment d'intimité dans le paysage islandais spectaculaire. 
                 Par conséquent, nous avons décidé de construire quelques maisons sur un immense terrain au lieu de 
                 plusieurs maisons sur un tout petit terrain pour éviter l'impression de séjourner dans un complexe.
                <br><br>
                La forme de nos Loges s'inspire des maisons scandinaves et la combinaison d'éléments en bois avec de 
                l'acier et du verre rend les Lodges uniques. Nos Torfbaeir sont inspirées comme leur nom l'indique des Maisons
                en chaume viking. Nous respectons la nature et n'utilisons que des matériaux 
                qui ne nuisent pas à notre magnifique environnement. L'eau est la plus pure du monde, provenant directement 
                d'une source voisine.</p>
                
        </div>
        <div class="col-7 d-flex justify-content-evenly align-items-center aboutUs" id="aboutThree">
            <p>La cuisine de Íslenskt sumarhús s'inspire de la tradition islandaise et des ingrédients locaux 
                les plus fins et les plus frais. Le menu change tous les soirs, il est informel, créatif, dramatique et accompli.
                <br><br>
                Notre chef utilise les ingrédients islandais les plus frais provenant principalement de producteurs locaux dans un rayon de 10 km. 
                Les baies et les fruits rouges, les légumes, les herbes et les salades sont cultivés toute l'année dans des serres classiques,
                 chauffées par l'abondante énergie géothermique de l'Islande. Le saumon et l'omble sont pêchés dans les rivières voisines et 
                 les fruits de mer proviennent des pêcheurs côtiers. L'agneau et le bœuf de pâturage de montagne sont frais et locaux et 
                 sont complétés par des vins de notre cave soigneusement sélectionnés.</p>
                <img src="../src/assets/Image/about3.webp" alt="">
                
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
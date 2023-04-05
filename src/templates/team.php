<?php $title ="Notre équipe"; ?>
<?php ob_start(); ?>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center intro">
                
                <h1 class="m-5 text-center"><strong>Découvrez notre magnifique équipe !</strong>
                <br>
                    Hittu frábæra teymið okkar !
                </h1>
            </div>
        </div>
        <div class="row mt-5 d-flex flex-wrap align-items-center justify-content-evenly" style="background-image:url('../src/assets/Image/betweenlocation.webp');">
            <div class="col-6 d-flex flex-column justify-content-center align-items-center teamPortrait">
                <img src="../src/assets/Image/team1.webp" alt="Membre d'équipe 1">
                <h2>MARGET </h2>
                <h3 class="mb-3">Fondatrice & CEO</h3>
                <p class="text-center">Lorem ipsum dolor sit amet,<br>
                consectetur adipiscing elit.<br>
                Curabitur et aliquet erat. Sed<br>
                auctor orci est, quis aliquet velit<br>
                placerat ac.</p>
            </div>
            <div class="col-6 d-flex flex-column justify-content-center align-items-center teamPortrait">
                <img src="../src/assets/Image/team2.webp" alt="Membre d'équipe 2">
                <h2>PETUR</h2>
                <h3 class="mb-3">Community Manager & SAV</h3>
                <p class="text-center">Lorem ipsum dolor sit amet,<br>
                consectetur adipiscing elit.<br>
                Curabitur et aliquet erat. Sed<br>
                auctor orci est, quis aliquet velit<br>
                placerat ac.</p>
            </div>
            <div class="col-6 d-flex flex-column justify-content-center align-items-center teamPortrait">
                <img src="../src/assets/Image/team3.webp" alt="Membre d'équipe 3">
                <h2>BRYNJA</h2>
                <h3 class="mb-3">Manager Entretient</h3>
                <p class="text-center">Lorem ipsum dolor sit amet,<br>
                consectetur adipiscing elit.<br>
                Curabitur et aliquet erat. Sed<br>
                auctor orci est, quis aliquet velit<br>
                placerat ac.</p>
            </div>
            <div class="col-6 d-flex flex-column justify-content-center align-items-center teamPortrait">
                <img src="../src/assets/Image/team4.webp" alt="Membre d'équipe 4">
                <h2>KRISTJANA </h2>
                <h3 class="mb-3">Manager Environnemental</h3>
                <p class="text-center">Lorem ipsum dolor sit amet,<br>
                consectetur adipiscing elit.<br>
                Curabitur et aliquet erat. Sed<br>
                auctor orci est, quis aliquet velit<br>
                placerat ac.</p>
            </div>
        </div>
        <div class="row mt-5 mb-5 d-flex flex-wrap align-items-center justify-content-evenly" style="background-image:url('../src/assets/Image/betweenlocation.webp')">>
            <div class="col-2 d-flex flex-column justify-content-center align-items-center teamEmployees">
                <img src="../src/assets/Image/employee1.webp" alt="Membre d'équipe 5">
                <h2>HELVIR</h2>
                <h3 class="mb-3">Homme de Ménage</h3>
                <p class="text-center">Lorem ipsum dolor sit amet,<br>
                consectetur adipiscing elit.<br>
                Curabitur et aliquet erat. Sed<br>
                auctor orci est, quis aliquet velit<br>
                placerat ac.</p>
            </div>
            <div class="col-2 d-flex flex-column justify-content-center align-items-center teamEmployees">
                <img src="../src/assets/Image/employee1.webp" alt="Membre d'équipe 5">
                <h2>ERYA </h2>
                <h3 class="mb-3">Femme de menage</h3>
                <p class="text-center">Lorem ipsum dolor sit amet,<br>
                consectetur adipiscing elit.<br>
                Curabitur et aliquet erat. Sed<br>
                auctor orci est, quis aliquet velit<br>
                placerat ac.</p>
            </div>
            <div class="col-2 d-flex flex-column justify-content-center align-items-center teamEmployees">
                <img src="../src/assets/Image/employee1.webp" alt="Membre d'équipe 5">
                <h2>BJORN</h2>
                <h3 class="mb-3">Jardinier</h3>
                <p class="text-center">Lorem ipsum dolor sit amet,<br>
                consectetur adipiscing elit.<br>
                Curabitur et aliquet erat. Sed<br>
                auctor orci est, quis aliquet velit<br>
                placerat ac.</p>
            </div>
            <div class="col-2 d-flex flex-column justify-content-center align-items-center teamEmployees">
                <img src="../src/assets/Image/employee1.webp" alt="Membre d'équipe 5">
                <h2>YVANA</h2>
                <h3 class="mb-3">Hotesse d'acceuil</h3>
                <p class="text-center">Lorem ipsum dolor sit amet,<br>
                consectetur adipiscing elit.<br>
                Curabitur et aliquet erat. Sed<br>
                auctor orci est, quis aliquet velit<br>
                placerat ac.</p>
            </div>
        </div>
        
    </div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
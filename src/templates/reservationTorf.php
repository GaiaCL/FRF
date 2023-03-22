<?php $title = $_GET['page']; ?>
<?php ob_start(); ?>
    <div class="container-fluid">
        
    </div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>

<?php 

function selectLogements(){
    $stmt = dbConnect()->prepare("SELECT*FROM logements as l INNER JOIN images as i ON l.id = i.id_logements INNER JOIN categories as c ON c.id = l.id_categories WHERE c.id = ".$_GET['id']."");
    $stmt->execute();
    $logements = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $logements;
}

function carouselLogements(){
    $stmt = dbConnect()->prepare("SELECT*FROM images WHERE id_categories = ".$_GET['id']." AND id >= 6 AND id <= 14");
    $stmt->execute();
    $carousels = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $carousels;
}

function selectTitle() {
    $stmt = dbConnect()->prepare("SELECT*FROM categories WHERE id = ".$_GET['id']."");
    $stmt->execute();
    $intros = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $intros;
}

function selectImg(){
    $stmt = dbConnect()->prepare("SELECT*FROM images WHERE id_categories = ".$_GET['id']." AND id = 15");
    $stmt->execute();
    $imgs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $imgs;
}
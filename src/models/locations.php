<?php 

function selectLogements(){
    $stmt = dbConnect()->prepare("SELECT*FROM logements as l INNER JOIN images as i ON l.id = i.id_logements INNER JOIN categories as c ON c.id = l.id_categories WHERE c.id = ".$_GET['id']."");
    $stmt->execute();
    $logements = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $logements;
}

function carouselLogementsTorf(){
    $stmt = dbConnect()->prepare("SELECT*FROM images WHERE id_categories = ".$_GET['id']." AND id >= 6 AND id <= 14");
    $stmt->execute();
    $carousels = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $carousels;
}

function carouselLogementsLoge(){
    $stmt = dbConnect()->prepare("SELECT*FROM images WHERE id_categories = ".$_GET['id']." AND id >= 21 AND id <= 25");
    $stmt->execute();
    $carousels = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $carousels;
}

function carouselLogementsChal(){
    $stmt = dbConnect()->prepare("SELECT*FROM images WHERE id_categories = ".$_GET['id']." AND id >= 31 AND id <= 34");
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

function selectImgTorf(){
    $stmt = dbConnect()->prepare("SELECT*FROM images WHERE id_categories = ".$_GET['id']." AND id = 15");
    $stmt->execute();
    $imgs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $imgs;
}
function selectImgLoge(){
    $stmt = dbConnect()->prepare("SELECT*FROM images WHERE id_categories = ".$_GET['id']." AND id = 26");
    $stmt->execute();
    $imgs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $imgs;
}
function selectImgChal(){
    $stmt = dbConnect()->prepare("SELECT*FROM images WHERE id_categories = ".$_GET['id']." AND id = 30");
    $stmt->execute();
    $imgs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $imgs;
}
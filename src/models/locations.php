<?php 

function selectLogements(){
    $stmt = dbConnect()->prepare("SELECT*FROM logements as l INNER JOIN images as i ON l.id = i.id_logements INNER JOIN categories as c ON c.id = l.id_categories WHERE c.id = ".$_GET['id']."");
    $stmt->execute();
    $logements = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $logements;
}

function selectTitle() {
    $stmt = dbConnect()->prepare("SELECT*FROM categories WHERE id = ".$_GET['id']."");
    $stmt->execute();
    $intros = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $intros;
}

function selectBgTorf(){
    $stmt = dbConnect()->prepare("SELECT*FROM images WHERE id_categories = ".$_GET['id']." AND id = 35");
    $stmt->execute();
    $bgs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $bgs;
}
function selectBgLoge(){
    $stmt = dbConnect()->prepare("SELECT*FROM images WHERE id_categories = ".$_GET['id']." AND id = 36");
    $stmt->execute();
    $bgs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $bgs;
}
function selectBgChalet(){
    $stmt = dbConnect()->prepare("SELECT*FROM images WHERE id_categories = ".$_GET['id']." AND id = 37");
    $stmt->execute();
    $bgs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $bgs;
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
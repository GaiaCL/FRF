<?php 

function selectLocation(){
    $stmt = dbConnect()->prepare('SELECT*FROM videos as v INNER JOIN categories as c ON c.id = v.id_categories');
    $stmt->execute();
    $locations = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $locations;
}
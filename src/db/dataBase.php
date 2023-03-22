<?php


function dbConnect() {
    try
     {
     $db = new PDO('mysql:host=localhost;dbname=islensktsumarhus;charset=utf8', 'root',
    '');
     }
     catch(Exception $e){
     die( 'Erreur : '.$e->getMessage() );
     } 
    return $db;
    }
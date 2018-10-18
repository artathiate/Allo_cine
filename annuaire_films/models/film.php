<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=annuaire_film2;charset=utf8', 'root', '');
}
catch(Exception $e) {
    die('Erreur:'.$e->getMessage());
}

function listFilms() {
    
}

function film() {
   
}
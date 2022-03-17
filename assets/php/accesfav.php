<?php 
require("db.php");

$favoriser = ("SELECT * FROM film 
    INNER JOIN favoris ON film.id_film = favoris.id_film
    ");

$filmfavoris = $db->prepare($favoriser);

$filmfavoris->execute();

$filmfavoris = $filmfavoris ->fetchAll(PDO::FETCH_ASSOC);


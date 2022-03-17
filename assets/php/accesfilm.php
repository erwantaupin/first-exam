<?php 
require("db.php");

$film = ("SELECT * FROM film 
    INNER JOIN caracterise ON film.id_film = caracterise.id_film
    INNER JOIN genre ON genre.id_genre = caracterise.id_genre

    INNER JOIN jouer ON film.id_film = jouer.id_film
    INNER JOIN acteur ON jouer.id_acteur = acteur.id_acteur
   
    ");

$infofilm = $db->prepare($film);

$infofilm->execute();

$execute = $infofilm ->fetchAll(PDO::FETCH_ASSOC);


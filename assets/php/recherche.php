<?php

require("db.php");

$sqlRequest = ("SELECT * FROM film");
$recherche = $db -> prepare($sqlRequest);
$recherche->execute();

$result = $recherche->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $value) {
    $film = strtolower($value['titre_film']);
    $film_recherche = strtolower($_GET['search']);
    if ($film_recherche == $film) {
        header('Location: ../../pagefilm.php?id='. $value["id_film"]);
    }
}

?>
<?php 
    if(isset($_GET['id'])){
        require("db.php");
        $id_film = $_GET['id'];

        $sqlRequest = "DELETE FROM caracterise WHERE id_film = :id_film";
        $pdoStat = $db -> prepare($sqlRequest); 
        $pdoStat->execute(Array(
        ':id_film' => $id_film
        ));

        $sqlRequest = "DELETE FROM jouer WHERE id_film = :id_film";
        $pdoStat = $db -> prepare($sqlRequest); 
        $pdoStat->execute(Array(
        ':id_film' => $id_film
        ));

        $sqlRequest = "DELETE FROM film WHERE id_film = :id_film";
        $pdoStat = $db -> prepare($sqlRequest); 
        $pdoStat->execute(Array(
        ':id_film' => $id_film
        ));

        header("Location: ../../crud.php");


};
    


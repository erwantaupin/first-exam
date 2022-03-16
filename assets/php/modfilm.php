<?php 
    if(isset($_GET['id'])){
        require("db.php");
        
        
        $sqlRequest = "UPDATE film SET titre_film =:titre_film, synopsis_film =:synopsis_film, pegi_film =:pegi_film, date_film =:date_film, duree_film =:duree_film, image_film =:image_film, video_film =:video_film
                              WHERE id_film=:id_film;";
        $pdoStat = $db -> prepare($sqlRequest); 
        $pdoStat->execute(Array(
            ':titre_film'   =>    $_POST['titre_film'],
            ':synopsis_film'=>    $_POST['synopsis_film'],
            ':pegi_film'    =>    $_POST['pegi_film'],
            ':date_film'    =>    $_POST['date_film'],
            ':duree_film'   =>    $_POST['duree_film'],
            ':image_film'   =>    $_POST['image_film'],
            ':video_film'   =>    $_POST['video_film'],
            ':id_film'      =>    $_GET['id'],
        ));
        $sqlRequest = "UPDATE caracterise SET id_genre =:id_genre
                              WHERE id_film=:id_film;";
        $pdoStat = $db -> prepare($sqlRequest); 
        $pdoStat->execute(Array(
            ':id_genre'   =>    $_POST['id_genre'],
            ':id_film'      =>    $_GET['id'],
        ));
        $sqlRequest = "UPDATE jouer SET id_acteur =:id_acteur
                              WHERE id_film=:id_film;";
        $pdoStat = $db -> prepare($sqlRequest); 
        $pdoStat->execute(Array(
            ':id_acteur'   =>    $_POST['id_acteur'],
            ':id_film'      =>    $_GET['id'],
        ));
            header("Location: ../../crud.php");

};
<?php
    session_start();
    if(isset($_SESSION['sess_user_id'])){
        if(isset($_SESSION['sess_id_role'])){
            if($_SESSION['sess_id_role'] == "1"){
        if(isset($_GET['id'])){
                $id_film = $_GET['id'];
            require("assets/php/db.php");

            $sqlRequest = "SELECT * FROM film";
            $pdoStat = $db -> prepare($sqlRequest); 
            $pdoStat->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modding</title>
</head>
<body>
<div class="modal-content">

<form action="assets/php/modfilm.php?id=<?php echo $id_film?>" method="POST" class="crud-create">
            <?php 
    while ($result = $pdoStat->fetch()) {
        if($result['id_film'] == $id_film){
?>
                        <div class="one">
                            Titre du film   :<input type="texte" name="titre_film" id="" value="<?php echo $result["titre_film"]?>">
                        </div>
                        <div class="two">
                            Pegi du film    :<input type="texte" name="pegi_film" id="" value="<?php echo $result["pegi_film"]?>">
                        </div>
                        <div class="three">
                            Date du film    :<input type="texte" name="date_film" id="" value="<?php echo $result["date_film"]?>">
                        </div>
                        <div class="four">
                            Durée du film   :<input type="texte" name="duree_film" id="" value="<?php echo $result["duree_film"]?>">
                        </div>
                        <div class="five">
                            Image du film   :<input type="texte" name="image_film" id="" value="<?php echo $result["image_film"]?>">
                        </div>
                        <div class="six">
                            Video du film   :<input type="texte" name="video_film" id="" value="<?php echo $result["video_film"]?>">
                        </div>
                    <?php 

                        $sqlRequest = ("SELECT * FROM film 
                        INNER JOIN caracterise ON film.id_film = caracterise.id_film
                        INNER JOIN genre ON genre.id_genre = caracterise.id_genre
                        INNER JOIN jouer ON film.id_film = jouer.id_film
                        INNER JOIN acteur ON jouer.id_acteur = acteur.id_acteur
                        
                        ");
                        $requetegenre = $db -> prepare($sqlRequest); 
                        $requetegenre->execute();
                        while ($resultgenre = $requetegenre->fetch()) {
                            if($resultgenre['id_film'] == $id_film){
                    ?>
                        <div class="seven">
                            Genre du film   :<select name="id_genre" id="genre">
                                <option value="<?php echo $resultgenre["id_genre"] ?>">--<?php echo $resultgenre["nom_genre"] ?>--</option>
                                <?php 
                                    require("assets/php/accesgenre.php");
                                        foreach ($genre as $value){ ?>
                                        <option value="<?php echo $value["id_genre"] ?>">--<?php echo $value["nom_genre"] ?>--</option>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="heigh">
                            Acteur du film  :<select name="id_acteur" id="acteur">
                                <option value="<?php echo $resultgenre["id_acteur"] ?>">--<?php echo $resultgenre["nom_acteur"] ?>--</option>
                                <?php 
                                    require("assets/php/accesacteur.php");
                                        foreach ($acteur as $value){ ?>
                                        <option value="<?php echo $value["id_acteur"] ?>">--<?php echo $value["nom_acteur"] ?>--</option>
                                <?php } ?>
                                </select>
                        </div>
                        <?php     
                    }}
                    ?>

                        <div class="nine">
                            Synopsis du film:<input type="texte" name="synopsis_film" id="" value="<?php echo $result["synopsis_film"]?>">
                        </div>
                        <?php 
                            }}
                    ?>
                        <input type="submit" name="ajout" value="modifier valeur" id="submit"/>
                    </form>
</body>
</html>

<?php       }}
    else{
        session_destroy();
        header("Location: assets/php/signup.php");
    }
    }}
    else{
        header("Location: assets/php/signup.php");
    }
?>
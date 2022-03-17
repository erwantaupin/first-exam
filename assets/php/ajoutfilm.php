<?php
    require("db.php");
    if(isset($_POST)){
        if(isset($_POST["titre_film"])){
            $titre_film = $_POST["titre_film"];
        }
        if(isset($_POST["pegi_film"])){
            $pegi_film = $_POST["pegi_film"];
        }
        if(isset($_POST["date_film"])){
            $date_film = $_POST["date_film"];
        }
        if(isset($_POST["duree_film"])){
            $duree_film = $_POST["duree_film"];
        }
        if(isset($_POST["image_film"])){
            $image_film = $_POST["image_film"];
        }
        if(isset($_POST["video_film"])){
            $video_film = $_POST["video_film"];
        }
        if(isset($_POST["id_genre"])){
            $id_genre = $_POST["id_genre"];
        }
        if(isset($_POST["id_acteur"])){
            $id_acteur = $_POST["id_acteur"];
        }
        if(isset($_POST["synopsis_film"])){
            $synopsis_film = $_POST["synopsis_film"];
        }
        
    }else{
    }
    

    // insert dans table film
    $sqlRequest = "INSERT INTO film (titre_film, synopsis_film, pegi_film, date_film, duree_film, image_film, video_film)
                        VALUES (:titre_film, :synopsis_film, :pegi_film, :date_film, :duree_film, :image_film, :video_film);";
    $pdoStat = $db -> prepare($sqlRequest);
    $pdoStat->execute(Array(
        ':titre_film' => $titre_film,
        ':synopsis_film' => $synopsis_film,
        ':pegi_film' => $pegi_film,
        ':date_film' => $date_film,
        ':duree_film' => $duree_film,
        ':image_film' => $image_film,
        ':video_film' => $video_film,
    ));
    
    // insert dans table caracterise (genre)
    $sqlRequest  = "SELECT id_film FROM film ORDER BY id_film DESC LIMIT 1";
    $pdoStat = $db -> prepare($sqlRequest); 
    $pdoStat->execute();

    $id_last_film = $pdoStat->fetch(PDO::FETCH_ASSOC);


    $sqlRequest = "INSERT INTO caracterise (id_genre, id_film)
                        VALUES (:id_genre, :id_film);";
    $pdoStat = $db -> prepare($sqlRequest); 
    $pdoStat->execute(Array(
        ':id_genre' => $id_genre,
        ':id_film' => $id_last_film["id_film"]
));

    $sqlRequest = "INSERT INTO jouer (id_acteur, id_film)
                        VALUES (:id_acteur, :id_film);";
    $pdoStat = $db -> prepare($sqlRequest); 
    $pdoStat->execute(Array(
        ':id_acteur' => $id_acteur,
        ':id_film' => $id_last_film["id_film"]
    ));


    header("Location: ../../crud.php");









































    // if(isset($_SESSION['id'])){
    //     header('Location: ../../index.php');
    //     exit;
    // }
    
    // if(!empty($_POST)){
    //     extract($_POST);
    //     $valide = true;
    // }

    // if(isset($_POST['inscription'])){
    //     $sess_username = htmlentities($_POST['username']);
    //     $sess_mail = htmlentities($_POST['mail']);
    //     $sess_password = htmlentities($_POST['password']);

    //     if(empty($sess_username)){
    //         $valid = false;
    //         $er_sess_username = ("Le nom d'utilisateur ne peut pas être vide");
    //     }

    //     if(empty($sess_mail)){
    //         $valid = false;
    //         $er_sess_mail = ("Le mail ne peut pas être vide");
    //     }

    //     if(empty($sess_password)){
    //         $valid = false;
    //         $er_sess_password = ("Le password ne peut pas être vide");
    //     }
    // }



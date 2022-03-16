<?php
    require("db.php");
    if(isset($_POST)){
        if(isset($_POST["name_user"])){
            $name_user = $_POST["name_user"];
        }
        if(isset($_POST["password"])){
            $password = $_POST["password"];
        }
        if(isset($_POST["mail"])){
            $mail = $_POST["mail"];
        }
        if(isset($_POST["id_role"])){
            $id_role = $_POST["id_role"];
        }
        
        
    }else{
    }
    

    // insert dans table film
    $sqlRequest = "INSERT INTO users (nom_user, password_user, mail_user, id_role)
                        VALUES (:nom_user, :password_user, :mail_user, :id_role);";
    $pdoStat = $db -> prepare($sqlRequest);
    $pdoStat->execute(Array(
        ':nom_user' => $name_user,
        ':password_user' => $password,
        ':mail_user' => $mail,
        ':id_role' => $id_role,
    ));

    header("Location: ../../crud.php");
<?php
    require("db.php");
    if(isset($_POST)){
        if(isset($_POST["username"])){
            $name = $_POST["username"];
        }
        if(isset($_POST["mail"])){
            $mail = $_POST["mail"];
        }
        if(isset($_POST["password"])){
            $password = $_POST["password"];
        }
        
    }else{
    }


            $sqlRequest = "INSERT INTO users (nom_user,  mail_user, password_user,id_role)
                            VALUES (:nom_user, :mail_user, :password_user ,'2');";
            $pdoStat = $db -> prepare($sqlRequest);
            $pdoStat->execute(ARRAY(
                ':nom_user' => $name,
                ':mail_user' => $mail,
                ':password_user' => $password
            ));
            header("Location: signup.php?success=1");
    
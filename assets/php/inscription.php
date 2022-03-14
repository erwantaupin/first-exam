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
                    VALUES (?,?,?,'2');";
    $pdoStat = $db -> prepare($sqlRequest);
    $pdoStat->execute(array($name,$mail,$password));

    header("Location: signin.php");
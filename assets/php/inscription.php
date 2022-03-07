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



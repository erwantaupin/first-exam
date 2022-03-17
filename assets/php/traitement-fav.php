<?php
session_start();
if(isset($_SESSION['sess_user_id'])){
    if(isset($_GET['id'])){
        include("db.php");
        if(!empty($_GET['action'])){
        $action = $_GET['action'];
                if($action == '1'){ 
            $sqlRequest = "INSERT INTO favoris (id_user, id_film)
                                VALUES (:id_user, :id_film);";
            $pdoStat = $db -> prepare($sqlRequest); 
            $pdoStat->execute(Array(
                ':id_user' => $_SESSION['sess_user_id'],
                ':id_film' => $_GET['id']
            ));
            header('location: ../../accueil.php');
            }
            if($action == '2'){
            $sqlRequest = "DELETE FROM favoris WHERE id_film = :id_film AND id_user = :id_user";
                $pdoStat = $db -> prepare($sqlRequest); 
                $pdoStat->execute(Array(
                    ':id_user' => $_SESSION['sess_user_id'],
                    ':id_film' => $_GET['id']
                ));
            header('location: ../../accueil.php');
            }
        }
    }  
}
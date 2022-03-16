<?php 
    if(isset($_GET['id'])){
        require("db.php");
        $id_user = $_GET['id'];

        $sqlRequest = "DELETE FROM users WHERE id_user = :id_user";
        $pdoStat = $db -> prepare($sqlRequest); 
        $pdoStat->execute(Array(
        ':id_user' => $id_user
        ));

        header("Location: ../../crud.php");


};
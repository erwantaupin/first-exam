<?php 
    if(isset($_GET['id'])){
        require("db.php");
        
        
        $sqlRequest = "UPDATE users SET nom_user =:nom_user, password_user =:password_user, mail_user =:mail_user, id_role =:id_role
                              WHERE id_user=:id_user;";
        $pdoStat = $db -> prepare($sqlRequest); 
        $pdoStat->execute(Array(
            ':nom_user'   =>    $_POST['nom_user'],
            ':password_user'=>    $_POST['password_user'],
            ':mail_user'    =>    $_POST['mail_user'],
            ':id_role'    =>    $_POST['id_role'],
            ':id_user'      =>    $_GET['id'],
        ));
            header("Location: ../../crud.php");

};
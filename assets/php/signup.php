<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    <?php
if(!empty($_GET['erreur'])){
 $erreur = $_GET['erreur'];
}
if(!empty($_GET['success'])){
 $success = $_GET['success'];
}
?>
    <div class="box-log">
        
    <div class="logge"><div class="titre-log"><h2>Login</h2></div>
            <form action="traitement.php" method="post" class="form-log">
                <p><h3>Pseudo        : </h3><input class="input" type="text" name="username" placeholder="votre pseudo" required/></p>
                <p><h3>Mot de Passe  : </h3><input class="input" type="password" name="password" placeholder="votre password" required/></p>
                <span></span>
                <input type="submit" name="submitBtnLogin" value="Connexion" id="subm"/>
            </form>
            <?php

                if(!empty($_GET['erreur'])){
                if($erreur == '2'){ 
                  echo ('Pseudo ou mdp incorrect'); 
               
                }

                }
                if(!empty($_GET['erreur'])){
                if($erreur == '1'){ 
                  echo ('Champs incomplet'); 
               
                }}
                if(!empty($_GET['success'])){
                if($success == '1'){ 
                  echo ('Compte créer'); 
               
                }} 
            ?>
            <div class="button"><a href="signin.php"><H5>Créer Compte</H5></a></div>
            <div class="button"><a href="../../index.php"><H2>Retour</H2></a></div>

        </div>
    </div>
</body>
</html>
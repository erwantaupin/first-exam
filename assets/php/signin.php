<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Inscription</title>
</head>
<body>
    <?php 
    
    if(!empty($_GET['erreur'])){$erreur = $_GET['erreur'];} ?>
    <div class="box-log">   
    <div class="logge"><div class="titre-log"><h2>Inscription</h2></div>
    <div class="messageerreur">
            <?php if(!empty($_GET['erreur'])){
                if($erreur == '4'){ 
                  echo ('veuillez respecter tous les champs'); 
               
                } }?>
    </div>
            <form action="inscription.php" method="post" class="form-log">
                <p><h3>Pseudo        : </h3><input class="input" type="text" name="username" placeholder="votre pseudo" required/></p>
                <p><h3>Email         : </h3><input class="input" type="email" name="mail" placeholder="votre email" required/></p>
                <p><h3>Mot de Passe  : </h3><input class="input" type="password" name="password" placeholder="votre password" required/></p>
                <input type="submit" name="inscription" value="Inscription" id="subm"/>
            </form>
            <div class="button"><a href="../../index.php"><H2>Retour</H2></a></div>
        </div>
    </div>
</body>
</html>
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
    <div class="box-log">   
    <div class="logge"><div class="titre-log"><h2>Inscription</h2></div>
            <form action="traitement.php" method="post" class="form-log">
                <p><h3>Pseudo        : </h3><input class="input" type="text" name="pseudo" placeholder="votre pseudo" required/></p><span></span>
                <p><h3>Email         : </h3><input class="input" type="email" name="mail" placeholder="votre email" required/></p><span></span>
                <p><h3>Mot de Passe  : </h3><input class="input" type="password" name="password" placeholder="votre password" required/></p>
                <span></span>
                <p><input type="checkbox" name="remember"/><H4>se souvenir de moi</H4></p>
                <span></span>
                <input type="submit" value="Inscription" id="subm"/>
            </form>
            <span></span>
            <div class="button"><a href="../../index.php"><H2>Retour</H2></a></div>
        </div>
    </div>
</body>
</html>
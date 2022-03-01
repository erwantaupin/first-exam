<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/accueil.css">
    <link rel="stylesheet" href="assets/css/include.css">
    <script src="https://kit.fontawesome.com/aa36982253.js" crossorigin="anonymous"></script>
    <title>Accueil</title>
</head>
<body>
    <header>
        <div class="logo"></div>
        <nav>
            <ul id="barrep">
                <li><a href=""><h5>Accueil</h5></a></li>
                <li><a href=""><h5>Favoris</h5></a></li>
                <li><a href=""><h5>Genre</h5></a></li>
            </ul>
        </nav>
        <form class="first" action="" method="post">
            <p><input class="recherche" type="text" name="search" placeholder="search"><a href=""><img id="loupe" src="assets/images/svg/recherche.svg"></i></a></p>
        </form>
            
        <form class="second" action="" method="post">
            <input type="submit" value="deconnexion" id="deco"/>
        </form>    
    </header>
    <?php   include("assets/include/footer.php"); ?>
</body>
</html>
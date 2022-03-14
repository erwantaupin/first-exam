<header>
        <div class="box-logo">
            <div class="logo"></div>
        </div>
        <nav>    
            <ul class="barrep">
                <li><a href="accueil.php"><h4>Accueil</h4></a></li>
            </ul>
        </nav>
        <form class="first" action="assets/php/recherche.php" method="GET">
            <p><input class="recherche" type="text" name="search" placeholder="search"><div class="boutonloupe"><a href=""><img id="loupe" src="assets/images/svg/recherche.svg"></i></a></div></p>
        </form>     
        <form class="second" action="assets/php/logout.php" method="post">
            <input type="submit" value="deconnexion" id="deco"/>
        </form>    
    </header>
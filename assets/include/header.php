<header>
        <div class="box-logo">
            <div class="logo"></div>
            <div class="echohello"><H4>Bonjour <?php echo($_SESSION['sess_user_name']);?></H4></div>
        </div>
        <nav>    
            <ul class="barrep">
                <li><a href="accueil.php"><h4>Accueil</h4></a></li>
                <?php if(isset($_SESSION['sess_id_role'])){ 
                    if($_SESSION['sess_id_role'] == "1"){
                ?>
                <li><a href="crud.php"><h4>Crud</h4></a></li>
                <?php }} ?>
                <li><a href=""><h4>Favoris</h4></a></li>
                <li><a href=""><h4>Genre</h4></a>
                   <li class="sous-menu"><img id="chevronbas" src="assets/images/svg/chevronbas.svg">
                            <ul class="ulssmenu">
                                <li><a class="pad-ss" href=""><h5>Actions</h5></a></li>
                                <li><a class="pad-ss" href=""><h5>Aventures</h5></a></li>
                                <li><a class="pad-ss" href=""><h5>S . F</h5></a></li>
                                <li><a class="pad-ss" href=""><h5>Humours</h5></a></li>
                                <li><a class="pad-ss" href=""><h5>Animations</h5></a></li>
                                <li><a class="pad-ss" href=""><h5>Horreurs</h5></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <form class="first" action="assets/php/recherche.php" method="GET">
            <p><input class="recherche" type="text" name="search" placeholder="search"><div class="boutonloupe"><a href=""><img id="loupe" src="assets/images/svg/recherche.svg"></i></a></div></p>
        </form>     
        <form class="second" action="assets/php/logout.php" method="post">
            <input type="submit" value="deconnexion" id="deco"/>
        </form>    
    </header>
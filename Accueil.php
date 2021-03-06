<?php
    session_start();
    if(isset($_SESSION['sess_user_id'])){
    require("assets/php/accesfilm.php");
    require("assets/php/accesfav.php");

    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/accueil.css">
        <link rel="stylesheet" href="assets/css/includeheader.css">
        <link rel="stylesheet" href="assets/css/includefooter.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/aa36982253.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css"/>
        <title>Accueil</title>
    </head>
    <body>
        <?php   include("assets/include/header.php"); ?>
        <div class="box-carrousel">
        <div class="fav-film">
            <div class="sliders offback">
                <div class="sous-titre"><h3>Mes Films</h3></div>
                <div class="slide responsive fv norad">                   
                            <?php foreach ($filmfavoris as $value){ 
                                if($value['id_user'] == $_SESSION['sess_user_id'] ){
                            ?>    
                            <div class="body-slide" id="<?php echo $value["id_film"] ?>">
                            <div class="card" style=" background: url(<?php echo $value['image_film']?>)">
                                <a href="pagefilm.php?id=<?php echo $value["id_film"]?>" class="js-modal">                           
                                    <div class="textcache" id="info">
                                        <div class="minititre">
                                            <h4>Info</h4>
                                            <ul>
                                                <li><p><?php echo $value["pegi_film"] ?></p></li>
                                                <li><p><?php echo $value["date_film"] ?></p></li>
                                                <li><p><?php echo $value["duree_film"] ?></p></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php echo $value["titre_film"]?>
                                </a>
                            </div>
                            </div>
                        
                        <?php }} ?>
                </div>
                </div>
            </div>
        </div>
        <div class="box-nos-films">
            <div class="titre"><h2>Nos Films</h2></div>
            <div class="sliders onback">
                <div class="sous-titre"><h3>Action</h3></div>
                <div class="slide responsive onrad">
                    <?php foreach ($execute as $value){ ?>
                        <?php if ($value["id_genre"] == 1){ ?>
                    <div class="body-slide" id="<?php echo $value["id_film"] ?>">
                    <div class="card" style=" background: url(<?php echo $value['image_film']?>)">
                        <a href="pagefilm.php?id=<?php echo $value["id_film"]?>" class="js-modal">                           
                            <div class="textcache" id="info">
                                <div class="minititre">
                                    <h4>Info</h4>
                                    <ul>
                                        <li><p><?php echo $value["pegi_film"] ?></p></li>
                                        <li><p><?php echo $value["date_film"] ?></p></li>
                                        <li><p><?php echo $value["duree_film"] ?></p></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <?php echo $value["titre_film"]?>
                        </a>
                    </div>
                    </div>
                <?php } ?>
                <?php } ?>
                </div> 
            </div>
            <div class="sliders">
                <div class="sous-titre"><h3>Horreur</h3></div>
                <div class="slide responsive onrad">
                <?php foreach ($execute as $value){ ?>
                        <?php if ($value["id_genre"] == 2){ ?>
                            <div class="body-slide" id="<?php echo $value["id_film"] ?>">
                    <div class="card" style=" background: url(<?php echo $value['image_film']?>)">
                        <a href="pagefilm.php?id=<?php echo $value["id_film"]?>" class="js-modal">
                            <div class="textcache" id="info">
                                <div class="minititre">
                                    <h4>Info</h4>
                                    <ul>
                                        <li><p><?php echo $value["pegi_film"] ?></p></li>
                                        <li><p><?php echo $value["date_film"] ?></p></li>
                                        <li><p><?php echo $value["duree_film"] ?></p></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <?php echo $value["titre_film"]?>
                        </a>
                    </div>
                    </div>
                <?php } ?>
                <?php } ?>
                </div>
            </div>           
            <div class="sliders">
                <div class="sous-titre"><h3>Comedie</h3></div>
                <div class="slide responsive">
                    <div class="body-slide" id="c1"><img src="assets/images/themask.jpg"><a href="" class="js-modal">the mask</a></div>
                    <div class="body-slide" id="c2"><img src="assets/images/yesman.jpg"><a href="" class="js-modal">Yes Man</a></div>
                    <div class="body-slide" id="c3"><img src="assets/images/dernierpub.jpg"><a href="" class="js-modal">the world end</a></div>
                    <div class="body-slide" id="c4"><img src="assets/images/shrek.jpg"><a href="" class="js-modal">Shrek</a></div>
                    <div class="body-slide" id="c5"><img src="assets/images/ghostbuster.jpg"><a href="" class="js-modal">Ghostbuster</a></div>
                    <div class="body-slide" id="c6"><img src="assets/images/mochemechant.jpg"><a href="" class="js-modal">Moi Moche et Mechant</a></div>
                    <div class="body-slide" id="c7"><img src="assets/images/asterix.jpg"><a href="" class="js-modal">Asterix et Obelix</a></div>
                    <div class="body-slide" id="c8"><img src="assets/images/goonies.jpg"><a href="" class="js-modal">Les Goonies</a></div>
                </div>
            </div>
            <div class="sliders">
                <div class="sous-titre"><h3>Science-Fiction</h3></div>
                <div class="slide responsive">
                    <div class="body-slide" id="s1"><img src="assets/images/tomorrow.jpg"><a href="" class="js-modal">Edge of Tomorrow</a></div>
                    <div class="body-slide" id="s2"><img src="assets/images/watchmen.jpg"><a href="" class="js-modal">Watchmen</a></div>
                    <div class="body-slide" id="s3"><img src="assets/images/startrekbeyond.jpg"><a href="" class="js-modal">star trek beyond</a></div>
                    <div class="body-slide" id="s4"><img src="assets/images/totalrecall.jpg"><a href="" class="js-modal">Total Recall</a></div>
                    <div class="body-slide" id="s5"><img src="assets/images/elysium.jpg"><a href="" class="js-modal">Elysium</a></div>
                    <div class="body-slide" id="s6"><img src="assets/images/bladerunner.jpg"><a href="" class="js-modal">Blade Runner</a></div>
                    <div class="body-slide" id="s7"><img src="assets/images/projectpower.jpg"><a href="" class="js-modal">Project Power</a></div>
                    <div class="body-slide" id="s8"><img src="assets/images/guerresdesmondes.jpg"><a href="" class="js-modal">La Guerre des Mondes</a></div>
                </div>
            </div>
        </div>
        <?php   include("assets/include/footer.php"); ?>
        <script src="assets/js/slider.js"></script>
        <script src="assets/js/carrousel.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/slick.min.js"></script>
        <script type="text/javascript" src="assets/js/slick.js"></script>
        <script type="text/javascript" src="assets/js/testcarrousel.js"></script>
    </body>
</html>
<?php 
        }
    else{
        header("Location: assets/php/signup.php");
    }

?>
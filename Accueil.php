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
        <link rel="stylesheet" href="assets/css/modal.css">
        <title>Accueil</title>
    </head>
    <body>
        <?php   include("assets/include/header.php"); ?>
        <div class="box-carrousel">
            <div class="carrousel">
                <div id="carousel">
                    <div class="hideLeft">
                        <img id="chobbit" src="assets/images/le_hobbit.jpg"><a href="#modal1" class="js-modal">Le Hobbit</a>
                    </div>
                    <div class="prevLeftSecond">
                        <img id="cevade" src="assets/images/evade.jpg"><a href="#modal2" class="js-modal">Les évadés</a></div>
                    <div class="prev">
                        <img id="cpub" src="assets/images/dernierpub.jpg"><a href="#modal3" class="js-modal">Last Pub</a></div>
                    <div class="selected">
                        <img id="cspider" src="assets/images/spider-manle3.jpg"><a href="#modal4" class="js-modal">Spider-Man 3</a></div>
                    <div class="next">
                        <img id="cstar" src="assets/images/startrekbeyond.jpg"><a href="#modal5" class="js-modal">Star Trek beyond</a></div>
                    <div class="nextRightSecond">
                        <img id="cconj" src="assets/images/the_conjuring.jpg"><a href="#modal6" class="js-modal">The Conjuring</a></div>
                    <div class="hideRight">
                        <img id="ciron" src="assets/images/iron-man_2.jpg"><a href="#modal7" class="js-modal">Iron-man 2</a></div>
                </div>
                <?php   include("assets/include/modal-hobbit.php"); ?>
                <div class="buttons">
                    <button id="prev">Precedent</button>
                    <button id="next">Suivant</button>
                </div>
            </div>
        </div>
        <div class="box-nos-films">
            <div class="titre"><h2>Nos Films</h2></div>
            <div class="sliders">
                <div class="sous-titre"><h3>Action</h3></div>
                <div class="slide responsive">
                    <div class="body-slide" id="a1"><img src="assets/images/gladiator.jpg"><a href="#modal8" class="js-modal">Gladiator</a></div>
                    <div class="body-slide" id="a2"><img src="assets/images/le_hobbit.jpg"><a href="#modal9" class="js-modal">The Hobbit</a></div>
                    <div class="body-slide" id="a3"><img src="assets/images/madmax.jpg"><a href="#modal10" class="js-modal">Mad Max</a></div>
                    <div class="body-slide" id="a4"><img src="assets/images/equalizer.jpg"><a href="#modal11" class="js-modal">Equalizer</a></div>
                    <div class="body-slide" id="a5"><img src="assets/images/batman.jpg"><a href="#modal12" class="js-modal">Batman</a></div>
                    <div class="body-slide" id="a6"><img src="assets/images/iron-man_2.jpg"><a href="#modal13" class="js-modal">Iron Man 2</a></div>
                    <div class="body-slide" id="a7"><img src="assets/images/warcraft.jpg"><a href="#modal14" class="js-modal">Warcraft</a></div>
                    <div class="body-slide" id="a8"><img src="assets/images/fury.jpg"><a href="#modal15" class="js-modal">Fury</a></div>
                </div>
            </div>
            <div class="sliders">
                <div class="sous-titre"><h3>Horreur</h3></div>
                <div class="slide responsive">
                    <div class="body-slide" id="h1"><img src="assets/images/rite.jpg"><a href="#modal16" class="js-modal">Le rite</a></div>
                    <div class="body-slide" id="h2"><img src="assets/images/halloween.jpg"><a href="#modal17" class="js-modal">Halloween</a></div>
                    <div class="body-slide" id="h3"><img src="assets/images/psycho.jpg"><a href="#modal18" class="js-modal">Psycho</a></div>
                    <div class="body-slide" id="h4"><img src="assets/images/the_conjuring.jpg"><a href="#modal19" class="js-modal">The Conjuring</a></div>
                    <div class="body-slide" id="h5"><img src="assets/images/gremlin.jpg"><a href="#modal20" class="js-modal">Gremlins</a></div>
                    <div class="body-slide" id="h6"><img src="assets/images/it.jpg"><a href="#modal21" class="js-modal">ça</a></div>
                    <div class="body-slide" id="h7"><img src="assets/images/insidious.jpg"><a href="#modal22" class="js-modal">Insidious</a></div>
                    <div class="body-slide" id="h8"><img src="assets/images/purge.jpg"><a href="#modal23" class="js-modal">The Purge</a></div>
                </div>
            </div>
            <div class="sliders">
                <div class="sous-titre"><h3>Comedie</h3></div>
                <div class="slide responsive">
                    <div class="body-slide" id="c1"><img src="assets/images/themask.jpg"><a href="#modal24" class="js-modal">the mask</a></div>
                    <div class="body-slide" id="c2"><img src="assets/images/yesman.jpg"><a href="#modal25" class="js-modal">Yes Man</a></div>
                    <div class="body-slide" id="c3"><img src="assets/images/dernierpub.jpg"><a href="#modal26" class="js-modal">the world end</a></div>
                    <div class="body-slide" id="c4"><img src="assets/images/shrek.jpg"><a href="#modal27" class="js-modal">Shrek</a></div>
                    <div class="body-slide" id="c5"><img src="assets/images/ghostbuster.jpg"><a href="#modal28" class="js-modal">Ghostbuster</a></div>
                    <div class="body-slide" id="c6"><img src="assets/images/mochemechant.jpg"><a href="#modal29" class="js-modal">Moi Moche et Mechant</a></div>
                    <div class="body-slide" id="c7"><img src="assets/images/asterix.jpg"><a href="#modal30" class="js-modal">Asterix et Obelix</a></div>
                    <div class="body-slide" id="c8"><img src="assets/images/goonies.jpg"><a href="#modal31" class="js-modal">Les Goonies</a></div>
                </div>
            </div>
            <div class="sliders">
                <div class="sous-titre"><h3>Science-Fiction</h3></div>
                <div class="slide responsive">
                    <div class="body-slide" id="s1"><img src="assets/images/tomorrow.jpg"><a href="#modal32" class="js-modal">Edge of Tomorrow</a></div>
                    <div class="body-slide" id="s2"><img src="assets/images/watchmen.jpg"><a href="#modal33" class="js-modal">Watchmen</a></div>
                    <div class="body-slide" id="s3"><img src="assets/images/startrekbeyond.jpg"><a href="#modal34" class="js-modal">star trek beyond</a></div>
                    <div class="body-slide" id="s4"><img src="assets/images/totalrecall.jpg"><a href="#modal35" class="js-modal">Total Recall</a></div>
                    <div class="body-slide" id="s5"><img src="assets/images/elysium.jpg"><a href="#modal36" class="js-modal">Elysium</a></div>
                    <div class="body-slide" id="s6"><img src="assets/images/bladerunner.jpg"><a href="#modal37" class="js-modal">Blade Runner</a></div>
                    <div class="body-slide" id="s7"><img src="assets/images/projectpower.jpg"><a href="#modal38" class="js-modal">Project Power</a></div>
                    <div class="body-slide" id="s8"><img src="assets/images/guerresdesmondes.jpg"><a href="#modal39" class="js-modal">La Guerre des Mondes</a></div>
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
        <script type="text/javascript" src="assets/js/modal.js"></script>
    </body>
</html>
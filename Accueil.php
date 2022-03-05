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
            <div class="carrousel">
                <div id="carousel">
                    <div class="hideLeft">
                        <a href="#modal1"><img id="chobbit" src="assets/images/le_hobbit.jpg"></a>
                    </div>
                    <div class="prevLeftSecond">
                        <a href="#modal2"><img id="cevade" src="assets/images/evade.jpg"></a></div>
                    <div class="prev">
                        <a href="#modal3"><img id="cpub" src="assets/images/dernierpub.jpg"></a></div>
                    <div class="selected">
                        <a href="#modal"><img id="cspider" src="assets/images/spider-manle3.jpg"></a></div>
                    <div class="next">
                        <a href="#modal"><img id="cstar" src="assets/images/startrekbeyond.jpg"></a></div>
                    <div class="nextRightSecond">
                        <a href="#modal"><img id="cconj" src="assets/images/the_conjuring.jpg"></a></div>
                    <div class="hideRight">
                        <a href="#modal"><img id="ciron" src="assets/images/iron-man_2.jpg"></a></div>
                </div>
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
                    <div class="body-slide" id="a1"><a href=""><img src="assets/images/gladiator.jpg"><h5>Gladiator</h5></a></div>
                    <div class="body-slide" id="a2"><a href=""><img src="assets/images/le_hobbit.jpg"><h5>The Hobbit</h5></a></div>
                    <div class="body-slide" id="a3"><a href=""><img src="assets/images/madmax.jpg"><h5>Mad Max</h5></a></div>
                    <div class="body-slide" id="a4"><a href=""><img src="assets/images/equalizer.jpg"><h5>Equalizer</h5></a></div>
                    <div class="body-slide" id="a5"><a href=""><img src="assets/images/batman.jpg"><h5>Batman</h5></a></div>
                    <div class="body-slide" id="a6"><a href=""><img src="assets/images/iron-man_2.jpg"><h5>Iron Man 2</h5></a></div>
                    <div class="body-slide" id="a7"><a href=""><img src="assets/images/warcraft.jpg"><h5>Warcraft</h5></a></div>
                    <div class="body-slide" id="a8"><a href=""><img src="assets/images/fury.jpg"><h5>Fury</h5></a></div>
                </div>
            </div>
            <div class="sliders">
                <div class="sous-titre"><h3>Horreur</h3></div>
                <div class="slide responsive">
                    <div class="body-slide" id="h1"><a href=""><img src="assets/images/rite.jpg"><h5>Le rite</h5></a></div>
                    <div class="body-slide" id="h2"><a href=""><img src="assets/images/halloween.jpg"><h5>Halloween</h5></a></div>
                    <div class="body-slide" id="h3"><a href=""><img src="assets/images/psycho.jpg"><h5>Psycho</h5></a></div>
                    <div class="body-slide" id="h4"><a href=""><img src="assets/images/the_conjuring.jpg"><h5>The Conjuring</h5></a></div>
                    <div class="body-slide" id="h5"><a href=""><img src="assets/images/gremlin.jpg"><h5>Gremlins</h5></a></div>
                    <div class="body-slide" id="h6"><a href=""><img src="assets/images/it.jpg"><h5>ça</h5></a></div>
                    <div class="body-slide" id="h7"><a href=""><img src="assets/images/insidious.jpg"><h5>Insidious</h5></a></div>
                    <div class="body-slide" id="h8"><a href=""><img src="assets/images/purge.jpg"><h5>The Purge</h5></a></div>
                </div>
            </div>
            <div class="sliders">
                <div class="sous-titre"><h3>Comedie</h3></div>
                <div class="slide responsive">
                    <div class="body-slide" id="c1"><a href=""><img src="assets/images/themask.jpg"><h5>the mask</h5></a></div>
                    <div class="body-slide" id="c2"><a href=""><img src="assets/images/yesman.jpg"><h5>Yes Man</h5></a></div>
                    <div class="body-slide" id="c3"><a href=""><img src="assets/images/dernierpub.jpg"><h5>the world end</h5></a></div>
                    <div class="body-slide" id="c4"><a href=""><img src="assets/images/shrek.jpg"><h5>Shrek</h5></a></div>
                    <div class="body-slide" id="c5"><a href=""><img src="assets/images/ghostbuster.jpg"><h5>Ghostbuster</h5></a></div>
                    <div class="body-slide" id="c6"><a href=""><img src="assets/images/mochemechant.jpg"><h5>Moi Moche et Mechant</h5></a></div>
                    <div class="body-slide" id="c7"><a href=""><img src="assets/images/asterix.jpg"><h5>Asterix et Obelix</h5></a></div>
                    <div class="body-slide" id="c8"><a href=""><img src="assets/images/goonies.jpg"><h5>Les Goonies</h5></a></div>
                </div>
            </div>
            <div class="sliders">
                <div class="sous-titre"><h3>Science-Fiction</h3></div>
                <div class="slide responsive">
                    <div class="body-slide" id="s1"><a href=""><img src="assets/images/tomorrow.jpg"><h5>Edge of Tomorrow</h5></a></div>
                    <div class="body-slide" id="s2"><a href=""><img src="assets/images/watchmen.jpg"><h5>Watchmen</h5></a></div>
                    <div class="body-slide" id="s3"><a href=""><img src="assets/images/startrekbeyond.jpg"><h5>star trek beyond</h5></a></div>
                    <div class="body-slide" id="s4"><a href=""><img src="assets/images/totalrecall.jpg"><h5>Total Recall</h5></a></div>
                    <div class="body-slide" id="s5"><a href=""><img src="assets/images/elysium.jpg"><h5>Elysium</h5></a></div>
                    <div class="body-slide" id="s6"><a href=""><img src="assets/images/bladerunner.jpg"><h5>Blade Runner</h5></a></div>
                    <div class="body-slide" id="s7"><a href=""><img src="assets/images/projectpower.jpg"><h5>Project Power</h5></a></div>
                    <div class="body-slide" id="s8"><a href=""><img src="assets/images/guerresdesmondes.jpg"><h5>La Guerre des Mondes</h5></a></div>
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
    </body>
</html>
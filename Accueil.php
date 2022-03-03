<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/accueil.css">
    <link rel="stylesheet" href="assets/css/include.css">
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
                    <img src="assets/images/le_hobbit.jpg"></div>
                <div class="prevLeftSecond">
                    <img src="assets/images/les_évadé.jpg"></div>
                <div class="prev">
                    <img src="assets/images/lastpub.jpg"></div>
                <div class="selected">
                    <img src="assets/images/spider-manle3.jpg"></div>
                <div class="next">
                    <img src="assets/images/startrekbeyond.jpg"></div>
                <div class="nextRightSecond">
                    <img src="assets/images/the_conjuring.jpg"></div>
                <div class="hideRight">
                    <img src="assets/images/iron-man_2.jpg"></div>
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
                <div class="body-slide"><a href=""><img src=""><h5>Gladiator</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>The Hobbit</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Mad Max</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Equalizer</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Batman</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Iron Man 2</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Warcraft</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Fury</h5></a></div>
            </div>
        </div>
        <div class="sliders">
            <div class="sous-titre"><h3>Horreur</h3></div>
            <div class="slide responsive">
                <div class="body-slide"><a href=""><img src=""><h5>Le rite</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Halloween</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Psycho</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>The Conjuring</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Gremlins</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>ça</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Insidius</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>The Purge</h5></a></div>
            </div>
        </div>
        <div class="sliders">
            <div class="sous-titre"><h3>Humour</h3></div>
            <div class="slide responsive">
                <div class="body-slide"><a href=""><img src=""><h5>American Pie</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Yes Man</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Last Pub</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Shrek</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Ghostbuster</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Moi Moche et Mechant</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Asterix et Obelix</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Les Goonies</h5></a></div>
            </div>
        </div>
        <div class="sliders">
            <div class="sous-titre"><h3>Science-Fiction</h3></div>
            <div class="slide responsive">
                <div class="body-slide"><a href=""><img src=""><h5>Edge of Tomorrow</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Watchmen</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>star trek beyond</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Total Recall</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Elysium</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Blade Runner</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>Projeect Power</h5></a></div>
                <div class="body-slide"><a href=""><img src=""><h5>La Guerre des Mondes</h5></a></div>
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
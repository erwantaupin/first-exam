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
            <div class="slide">
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
            </div>
        </div>
        <div class="sliders">
            <div class="sous-titre"><h3>Science-Fiction</h3></div>
            <div class="slide">
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
            </div>
        </div>
        <div class="sliders">
            <div class="sous-titre"><h3>Humour</h3></div>
            <div class="slide">
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
            </div>
        </div>
        <div class="sliders">
            <div class="sous-titre"><h3>Horreur</h3></div>
            <div class="slide">
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
                <div class="body-slide"></div>
            </div>
        </div>
    </div>
    <?php   include("assets/include/footer.php"); ?>
    <script src="assets/js/glider.js"></script>
    <script src="assets/js/carrousel.js"></script>
</body>
</html>
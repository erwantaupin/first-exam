<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/includeheader.css">
    <link rel="stylesheet" href="assets/css/includefooter.css">
    <!-- <link rel="stylesheet" href="assets/css/modal.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/newmodal.css">
    <link rel="stylesheet" href="assets/css/crud.css">
    <title>Moderateur</title>
</head>
<body>
    <?php include("assets/include/header.php") ?>
    <div class="box-crud">
        <div class="boxtitre-crud">
            <div class="titre-crud"><h2>C.R.U.D</h2></div>
        </div>
        <div class="box-modal-crud">
            <button id="myBtn"><img id="film-crud myBtn" src="assets/images/svg/video.svg"></button>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <form action="" method="post" class="crud-create">
                        <div class="one">
                            Titre du film   :<input type="texte" name="" id="" placeholder="nom du film">
                        </div>
                        <div class="two">
                            Pegi du film    :<input type="texte" name="" id="" placeholder="Pegi du film">
                        </div>
                        <div class="three">
                            Date du film    :<input type="texte" name="" id="" placeholder="Date du film">
                        </div>
                        <div class="four">
                            Durée du film   :<input type="texte" name="" id="" placeholder="Durée du film">
                        </div>
                        <div class="five">
                            Image du film   :<input type="texte" name="" id="" placeholder="image du film"><br>
                        </div>
                        <div class="six">
                            Video du film   :<input type="texte" name="" id="" placeholder="video du film">
                        </div>
                        <div class="seven">
                            Genre du film   :<select name="genre" id="genre">
                                <option value="">--choisissez un genre--</option>
                                <option value="1">--Action--</option>
                                <option value="2">--Horreur--</option>
                                <option value="3">--Comedie--</option>
                                <option value="4">--Science-Fiction--</option>
                                <option value="5">--Aventure--</option>
                            </select>
                        </div>
                        <div class="heigh">
                            Acteur du film  :<input type="texte" name="" id="" placeholder="acteur du film">
                        </div>
                        <div class="nine">
                            Synopsis du film:<input type="texte" name="" id="" placeholder="synopsis du film">
                        </div>
                        <input type="submit" name="ajout" value="+" id="submit"/>
                    </form>
                     <div class="box-list-film">
                         <div class="box-titre-list"><h2>Les Films</h2></div>
                         <div class="list-film">
                             <ul>
                                 <li></li>
                             </ul>
                         </div>
                     </div>
                </div>
            </div>


            <button id="myBtn1"><img id="film-crud myBtn" src="assets/images/svg/user-plus.svg"></button>
            <div id="myModal1" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                        <p>Voici du texte2...</p>
                        
                </div>
            </div>
            <!-- <div class="box-btn">
                 <a href="#modal1" class="js-modal">
                     <div class="btnleft">
                         <img id="film-crud" src="assets/images/svg/video.svg">
                        </div></a>
                <div class="btnright"><img id="user-crud"src="assets/images/svg/user-plus.svg"><br><a href="#modal2" class="js-modal">Utilisateur</a></div>
            </div> -->
        </div>
    </div>
    <?php include("assets/include/modal1.php") ?>
    <?php include("assets/include/modal2.php") ?>
    <?php include("assets/include/footer.php") ?>
    <script type="text/javascript" src="assets/js/newmodal.js"></script>
</body>
</html>
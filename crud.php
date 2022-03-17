<?php
    session_start();
    if(isset($_SESSION['sess_user_id'])){
        if(isset($_SESSION['sess_id_role'])){
            if($_SESSION['sess_id_role'] == "1"){
    require("assets/php/accesfilm.php");
    require("assets/php/accesgenre.php");
    require("assets/php/accesacteur.php");
    require("assets/php/accesuser.php");
    require("assets/php/accesrole.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/includeheader.css">
    <link rel="stylesheet" href="assets/css/includefooter.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/aa36982253.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/newmodal.css">
    <link rel="stylesheet" href="assets/css/crud.css">
    <title>Moderateur</title>
</head>
<body>
    <?php include("assets/include/header-crud.php") ?>
    <div class="box-crud">
        <div class="boxtitre-crud">
            <div class="titre-crud"><h2>C.R.U.D</h2></div>
        </div>
        <div class="box-modal-crud">
            <!-- modal-film -->
            <button id="myBtn"><img id="film-crud myBtn" src="assets/images/svg/video.svg"></button>
            <div id="myModal" class="modal">
                <?php include("assets/include/modal-film.php") ?>
            </div>
            <!-- modal-user -->
            <button id="myBtn1"><img id="film-crud myBtn" src="assets/images/svg/user-plus.svg"></button>
            <div id="myModal1" class="modal">
                <?php include("assets/include/modal-user.php") ?>
            </div>
        </div>
    </div>
    <?php include("assets/include/footer.php") ?>
    <script type="text/javascript" src="assets/js/newmodal.js"></script>
</body>
</html>

<?php 
        }
    else{
        session_destroy();
        header("Location: assets/php/signup.php");
    }
    
    }}


    else{
        header("Location: assets/php/signup.php");
    }

?>
<?php
    session_start();
    if(isset($_SESSION['sess_user_id'])){
            if(isset($_GET['id'])){
                require("assets/php/accesfilm.php");
                require("assets/php/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/includeheader.css">
    <link rel="stylesheet" href="assets/css/includefooter.css">
    <link rel="stylesheet" href="assets/css/video.css">
    <title>Movie</title>
</head>
<body>
<?php   
foreach($execute as $value){
    if($value['id_film'] == $_GET['id']){
include("assets/include/header.php");
?>
    <div class="imgfilm"><img id="img_film" src="<?php echo $value['image_film']?>" alt=""><h2 id="titre_film"><?php echo $value["titre_film"]?></h2></div>
    <div class="box-info">
        <div class="resume" id="resume"><div class="minititre"><h4>Synopsis</h4></div><p><?php echo $value["synopsis_film"]?></p>
        <H3 class="favoris">Favoris :</H3>
            <?php 
                $query = "SELECT * FROM `favoris` WHERE `id_user`=:id_user AND `id_film`=:id_film";
                $stmt = $db->prepare($query);
                $stmt->execute(ARRAY(
                    ':id_user' => $_SESSION['sess_user_id'],
                    ':id_film' => $_GET['id']
                ));
                $result = $stmt->fetch();
                if ($result != NULL) {

            ?>
            <a href="assets/php/traitement-fav.php?id=<?php echo $_GET['id']?>&action=2"><img class="favico" src="assets/images/svg/heart-plus.svg"></a>
            <?php

                } 
                else{
            ?>
            <a href="assets/php/traitement-fav.php?id=<?php echo $_GET['id']?>&action=1"><img class="favico" src="assets/images/svg/heart-moins.svg"></a>
            <?php

                } 

            ?>
        </div>
        <div class="petitinfo">
            <div class="info" id="info"><div class="minititre"><h4>Info</h4>
                <ul>
                    <li><p><?php echo $value["pegi_film"] ?></p></li>
                    <li><p><?php echo $value["date_film"] ?></p></li>
                    <li><p><?php echo $value["duree_film"] ?></p></li>
                    
                </ul>
            </div></div>
            <div class="acteur" id="acteur"><div class="minititre"><h4>First Cast</h4>
                <ul>
                    <li><p><?php echo $value["nom_acteur"] ?></p></li>
                    
                </ul>
            </div></div>
        </div>
    </div>
    <div class="boxfilm">
        <div class="iframe_du_film" id="iframe">
            <iframe width="1160" height="480" src="https://www.youtube.com/embed/<?= $value["video_film"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
    </div> 
                                                                         
<?php   
include("assets/include/footer.php"); 
        }
}
?>
</body>
</html>

<?php 
        }
        }
    else{
        header("Location: assets/php/signup.php");
    }

?>
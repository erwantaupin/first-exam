<?php
    session_start();
    if(isset($_SESSION['sess_user_id'])){          
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
    <title>titredufilm</title>
</head>
<body>
<?php   include("assets/include/header.php"); ?>
    <div class="imgfilm"><img id="img_film" src="assets/images/Spider4.jpg" alt=""><h2 id="titre_film">Spider Man<br>no way home</h2></div>
    <div class="box-info">
        <div class="resume" id="resume"><div class="minititre"><h4>Synopsis</h4></div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatem nulla quidem aperiam inventore vel officiis quasi culpa, fugit aspernatur optio, sapiente facilis? Cupiditate, quidem id perspiciatis esse aspernatur quisquam.
        Molestias tempora ratione quia debitis aperiam aliquam praesentium cumque qui rem quos voluptates alias iste asperiores temporibus animi tempore incidunt perspiciatis accusantium dignissimos velit ipsum, odit et quasi. Eligendi, eaque?</p></div>
        <div class="petitinfo">
            <div class="info" id="info"><div class="minititre"><h4>Info</h4>
                <ul>
                    <li><p>info a inserer</p></li>
                    <li><p>info a inserer</p></li>
                    <li><p>info a inserer</p></li>
                    <li><p>info a inserer</p></li>
                    <li><p>info a inserer</p></li>
                </ul>
            </div></div>
            <div class="acteur" id="acteur"><div class="minititre"><h4>Distribution</h4>
                <ul>
                    <li><p>info a inserer</p></li>
                    <li><p>info a inserer</p></li>
                    <li><p>info a inserer</p></li>
                    <li><p>info a inserer</p></li>
                    <li><p>info a inserer</p></li>
                </ul>
            </div></div>
        </div>
    </div>
    <div class="boxfilm">
        <div class="iframe_du_film" id="iframe"><iframe width="800" height="400" src="https://www.youtube.com/embed/7w_w10HVa54" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    </div>
<?php   include("assets/include/footer.php"); ?>
</body>
</html>

<?php 
        }
    else{
        header("Location: assets/php/signup.php");
    }

?>
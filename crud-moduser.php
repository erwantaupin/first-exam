<?php
    session_start();
    if(isset($_SESSION['sess_user_id'])){
        if(isset($_GET['id'])){
                $id_user = $_GET['id'];
            require("assets/php/db.php");

            $sqlRequest = "SELECT * FROM users";
            $pdoStat = $db -> prepare($sqlRequest); 
            $pdoStat->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modding</title>
</head>
<body>
<div class="modal-content">

<form action="assets/php/crud-moduser.php?id=<?php echo $id_user?>" method="POST" class="crud-create">
            <?php 
    while ($result = $pdoStat->fetch()) {
        if($result['id_user'] == $id_user){
?>
                        <div class="one">
                        nom utilisateur   :<input type="texte" name="nom_user" id="" value="<?php echo $result["nom_user"]?>">
                        </div>
                        <div class="two">
                        password utilisateur    :<input type="texte" name="password_user" id="" value="<?php echo $result["password_user"]?>">
                        </div>
                        <div class="three">
                        mail    :<input type="texte" name="mail_user" id="" value="<?php echo $result["mail_user"]?>">
                        </div>
                    <?php
                        $id_role = $_GET['role'];

                        $sqlRequest = ("SELECT * FROM role");
                        $requetegenre = $db -> prepare($sqlRequest); 
                        $requetegenre->execute();
                        while ($resultgenre = $requetegenre->fetch()) {
                            if($resultgenre['id_role'] == $id_role){
                    ?>
                        <div class="seven">
                        ID role   :<select name="id_role" id="user">
                                <option value="<?php echo $resultgenre["id_role"] ?>">--<?php echo $resultgenre["nom_role"] ?>--</option>
                                <?php 
                                    require("assets/php/accesrole.php");
                                        foreach ($role as $value){ ?>
                                        <option value="<?php echo $value["id_role"] ?>">--<?php echo $value["nom_role"] ?>--</option>
                                <?php } ?>

                            </select>
                        </div>
                        
                        <?php     
                    }}
                    ?>
                        <?php 
                            }}
                    ?>
                        <input type="submit" name="ajout" value="modifier valeur" id="submit"/>
                    </form>
</body>
</html>

<?php }} ?>
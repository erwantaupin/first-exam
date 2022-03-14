<?php 
require("db.php");

$sacteur = ("SELECT * FROM acteur");

$infoacteur = $db->prepare($sacteur);

$infoacteur->execute();

$acteur = $infoacteur ->fetchAll(PDO::FETCH_ASSOC);


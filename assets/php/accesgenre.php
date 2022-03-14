<?php 
require("db.php");

$sgenre = ("SELECT * FROM genre");

$infogenre = $db->prepare($sgenre);

$infogenre->execute();

$genre = $infogenre ->fetchAll(PDO::FETCH_ASSOC);


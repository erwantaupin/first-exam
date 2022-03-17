<?php 
require("db.php");

$user = ("SELECT * FROM users");

$user = $db->prepare($user);

$user->execute();

$user = $user ->fetchAll(PDO::FETCH_ASSOC);
<?php 
require("db.php");

$role = ("SELECT * FROM role");

$role = $db->prepare($role);

$role->execute();

$role = $role ->fetchAll(PDO::FETCH_ASSOC);
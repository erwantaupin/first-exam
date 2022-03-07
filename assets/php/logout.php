<?php
session_start();
session_destroy();
header('location: ../../index.php');
// $_SESSION['sess_user_id'] = "";
// $_SESSION['sess_username'] = "";
// $_SESSION['sess_name'] = "";
// if(empty($_SESSION['sess_user_id'])) header("location: ../../index.php");
?>
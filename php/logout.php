<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["login_user"]);
$_SESSION['loggedin'] = false;
header("Location:../cataloge.php");
?>
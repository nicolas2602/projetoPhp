<?php 

session_start();
unset($_SESSION['views']);

header ('location:login.php');

?>
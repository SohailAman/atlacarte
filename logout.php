<?php 
session_start();

if (isset($_SESSION['userLogin'])) {
	unset($_SESSION['userLogin']);
    header("location:login.php");
    exit();
}
 ?>
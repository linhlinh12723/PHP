<?php
 session_start();
 if (!isset($_SESSION['cart'])) {
	 header("location: indexx.php");
	 exit();
	 }
$key = isset($_GET["key"]) ?$_GET["key"]:"";
if($key) {
	if(array_key_exists($key, $_SESSION["cart"])) {
		unset($_SESSION["cart"][$key]);
		}
	}
header('location: addtocart.php');
     exit();
?>
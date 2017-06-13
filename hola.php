<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 2) {
  	header("location: login.php");
		exit;
  }
	//$active_productos="active";
	$title="Inventario | Cafeteria";
?>

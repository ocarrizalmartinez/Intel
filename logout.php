<?php

session_start();
unset ($_SESSION['user_name']);
session_destroy();

header('Location: http://localhost:80/Intetel_login/index.php');

?>

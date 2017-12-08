<?php


      require_once ("config/db.php");
    	require_once ("config/conexion.php");

      $active_profile="active";
      $active_pro="";
    	$active_pedido="";
    	$active_categoria="";
    	$active_clientes="";
    	$active_usuarios="";
    	$active_reportes="";
    	$title="System Control | Intetel";
  //include('session.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
      <link rel="stylesheet" href="css/profile.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Flat Login Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	</head>
	<body  style="background-color:#66ff99">
    <?php include('head.php'); ?>
    <?php  include 'navbar.php';  ?>
    <div class="header agile">
    	<div class="wrap">
        <h1 class="title-pen"> perfil de usuario <span>Alpha System</span></h1>
        <div class="user-profile">
        	<img class="avatar" src="img/user.ico" alt="usuario" />
            <div class="username"><?php echo "Administrador";?></div>
          <div class="bio">
          	administrador &  programador
          </div>
            <div class="description">
            administrador de contenido y diseño web
          </div>
          <ul class="data">
            <li>
              <span class="entypo-heart"> 127</span>
            </li>
            <li>
              <span class="entypo-eye"> 853</span>
            </li>
            <li>
              <span class="entypo-user"> 311</span>
            </li>
         </ul>
        </div>
        <br>
        <br>

        <div class="login-main wthree">
          <img src="img/logo.jpg">
        </div>
	    </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>

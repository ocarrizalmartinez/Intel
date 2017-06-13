<?php
  session_start();
  if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
      header("location: login.php");
  exit;
      }

      require_once ("config/db.php");
    	require_once ("config/conexion.php");

      $active_profile="active";
      $active_pro="";
    	$active_pedido="";
    	$active_categoria="";
    	$active_clientes="";
    	$active_usuarios="";
    	$active_reportes="";
    	$title="Productos | Intetel";
  //include('session.php');
?>
<!DOCTYPE html>
<html>
  <head>
		<title>Intetel Center Control</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
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
    		<div class="login-main wthree">
    			<div class="login">
    			<h3>Bienvenido al sistema de Intetel <i>
    				<hr>
    				<?php echo $_SESSION['firstname']." (".$_SESSION['user_name'].")"; ?>
          </i></h3>
            <div class="clear"> </div>
				        <h4></h4>
			     </div>
		    </div>
        <hr>
        <div class="login-main wthree">
          <p class="form-control" style="align:center">El siguiente sistema fue desarrollado con la tecnologia de Alpha Systems</p>
        </div>
        <div class="login-main wthree">
          <img src="img/logo.jpg">
        </div>
	    </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>

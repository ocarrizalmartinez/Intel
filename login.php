<?php
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    require_once("libraries/password_compatibility_library.php");
}
require_once("config/db.php");
require_once("classes/Login.php");
$login = new Login();

if ($login->isUserLoggedIn() == true) {
    if($_SESSION['user_login_status'] = 1){
      header("location: profile.php");
    }elseif ($_SESSION['user_login_status'] = 2) {
      header("location: hola.php");
    }
} else {

    ?>
	<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Intetel System Control</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/login.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body style="background-color:#66ff99">
 <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="img/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form method="post" accept-charset="utf-8" action="login.php" name="loginform" autocomplete="off" role="form" class="form-signin">
              <div class="text-center">
                <span>Intetel Comunicaciones &copy</span>
              </div>
      <?php

				if (isset($login)) {
					if ($login->errors) {
						?>
						<div class="alert alert-danger alert-dismissible" role="alert">
						    <strong>Error!</strong>

						<?php
						foreach ($login->errors as $error) {
							echo $error;
						}
						?>
						</div>
						<?php
					}
					if ($login->messages) {
						?>
						<div class="alert alert-success alert-dismissible" role="alert">
						    <strong>Aviso!</strong>
						<?php
						foreach ($login->messages as $message) {
							echo $message;
						}
						?>
						</div>
						<?php
					}
				}
				?>
                <span id="reauth-email" class="reauth-email"></span>

                <hr>
                <input class="form-control" placeholder="Usuario" name="user_name" type="text" value="" autofocus="" required>
                <input class="form-control" placeholder="Contraseña" name="user_password" type="password" value="" autocomplete="off" required>
                <button type="submit" class="btn btn-lg btn-success btn-block btn-signin" name="login" id="submit">Iniciar Sesión</button>
            </form>

        </div>
    </div>
    <?php include('footer.php'); ?>
  </body>
</html>

	<?php
}

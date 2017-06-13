<?php
  include("config/db.php");
  include("config/conexion.php");
  session_start();
  $user_check=$_SESSION['login_user_sys'];
  $ses_sql=mysqli_query($con, "select user from administrador where user='$user_check'");
  $row = mysqli_fetch_assoc($ses_sql);
  $login_session =$row['user'];
  if(!isset($login_session)){
    mysqli_close($con);
    header('Location: index.php');
  }
?>

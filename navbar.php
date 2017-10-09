<?php
	if (isset($title))
	{
?>
<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Navegación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="profile.php"><i class='glyphicon glyphicon-bookmark'></i> Intetel System Control</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
				<li class="<?php if (isset($active_pro)){echo $active_pro;}?>"><a href="pro.php"><i  class='glyphicon glyphicon-shopping-cart'></i> Productos</a></li>
				<li class="<?php if (isset($active_pedido)){echo $active_pedido;}?>"><a href="pedido.php"><i class='glyphicon glyphicon-plus-sign'></i> Pedido</a></li>
				<li class="<?php if (isset($active_categoria)){echo $active_categoria;}?>"><a href="categorias.php"><i class='glyphicon glyphicon-list'></i> Departamentos</a></li>
				<li class="<?php if (isset($active_clientes)){echo $active_clientes;}?>"><a href="clientes.php"><i class='glyphicon glyphicon-leaf'></i> Clientes</a></li>
				<li class="<?php if (isset($active_usuarios)){echo $active_usuarios;}?>"><a href="usuarios.php"><i  class='glyphicon glyphicon-user'></i> Usuarios</a></li>
				<li class="<?php if (isset($active_reportes)){echo $active_reportes;}?>"><a href="reportes.php"><i  class='glyphicon glyphicon-stats'></i> Reporte de Inventario</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
				<li><i class='glyphicon glyphicon-user'></i><span> Bienvenido <?php echo $_SESSION['firstname']; ?></span></li>
				<li><a href="login.php?logout"><i class='glyphicon glyphicon-off'></i> Salir</a></li>
      </ul>
    </div>
  </div>
</nav>
	<?php
		}
	?>

<?php
	include('is_logged.php');
	if (empty($_POST['mod_id'])) {
           $errors[] = "ID vacío";
        }else if (empty($_POST['mod_codigo'])) {
           $errors[] = "Código vacío";
        } else if (empty($_POST['mod_nombre'])){
			$errors[] = "Nombre del producto vacío";
		} else if (empty($_POST['mod_descripcion'])) {
			 $errors[] = "Descripción vacía";
		}else if ($_POST['mod_categoria']==""){
			$errors[] = "Selecciona la categoría del producto";
		}else if ($_POST['mod_estado']==""){
			$errors[] = "Selecciona el estado del producto";
		} else if (empty($_POST['mod_precio_compra'])){
			$errors[] = "Precio de compra vacío";
		}else if (empty($_POST['mod_precio'])){
			$errors[] = "Precio de venta vacío";
		}else if (empty($_POST['mod_iva'])){
			$errors[] = "IVA vacío";
		} else if (
			!empty($_POST['mod_id']) &&
			!empty($_POST['mod_codigo']) &&
			!empty($_POST['mod_nombre']) &&
			!empty($_POST['mod_descripcion']) &&
			$_POST['mod_categoria']!="" &&
			$_POST['mod_estado']!="" &&
			$_POST['mod_iva']!="" &&
			!empty($_POST['mod_precio_compra'] &&
			!empty($_POST['mod_precio'])
		){
			require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
			require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
			// escaping, additionally removing everything that could be (html/javascript-) code
			$codigo=mysqli_real_escape_string($con,(strip_tags($_POST["mod_codigo"],ENT_QUOTES)));
			$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["mod_nombre"],ENT_QUOTES)));
			$descripcion=mysqli_real_escape_string($con,(strip_tags($_POST["mod_descripcion"],ENT_QUOTES)));
			$categoria=intval($_POST['mod_categoria']);
			$estado=intval($_POST['mod_estado']);
			$stock=intval($_POST['mod_stock']);
			$precio_compra=floatval($_POST['mod_precio_compra']);
			$precio_venta=floatval($_POST['mod_precio']);
			$id_producto=$_POST['mod_id'];
			$iva=$_POST['mod_iva'];
			$sql="UPDATE products SET codigo_producto='".$codigo."', nombre_producto='".$nombre."', descripcion_producto='".$descripcion."', id_categoria='".$categoria."', precio_pro_compra='".$precio_compra."', precio_producto='".$precio_venta."', iva='".$iva."', status_producto='".$estado."', stock='".$stock."' WHERE id_producto='".$id_producto."'";
			$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Producto ha sido actualizado satisfactoriamente.";
			}else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}else{
			$errors []= "Error desconocido.";
		}

		if (isset($errors)){

			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong>
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){

				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>

<?php
  include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos

	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if (isset($_GET['id'])){
		$id_producto=intval($_GET['id']);
		$query=mysqli_query($con, "select * from detalle_cotizacion_demo where id_producto='".$id_producto."'");
		$count=mysqli_num_rows($query);
		if ($count==0){
			if ($delete1=mysqli_query($con,"DELETE FROM products WHERE id_producto='".$id_producto."'")){
			?>
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Aviso!</strong> Datos eliminados exitosamente.
			</div>
			<?php
		}else {
			?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Error!</strong> Lo siento algo ha salido mal intenta nuevamente.
			</div>
			<?php

		}

		} else {
			?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Error!</strong> No se pudo eliminar éste  producto. Existen cotizaciones vinculadas a éste producto.
			</div>
			<?php
		}



	}
	if($action == 'ajax'){
		// escaping, additionally removing everything that could be (html/javascript-) code
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		 $aColumns = array('codigo_producto', 'nombre_producto');//Columnas de busqueda
		 $sTable = "products";
		 $sWhere = "";
		if ( $_GET['q'] != "" )
		{
			$sWhere = "WHERE (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				$sWhere .= $aColumns[$i]." LIKE '%".$q."%' OR ";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
		}
		$sWhere.=" order by id_producto desc";
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 10; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './productos.php';
		//main query to fetch the data
		$sql="SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){

			?>
			<div class="table-responsive">
			  <table class="table table-hover">
				<tr style="background-color:lightgreen">
					<th>Código</th>
					<th>Producto</th>
					<th>Categoria</th>
					<th class='text-right'>Precio</th>
					<th>Estado</th>
					<th>Existencia</th>
					<th class='text-right'>Mas Info</th>



				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
						$id_producto=$row['id_producto'];
						$codigo_producto=$row['codigo_producto'];
						$nombre_producto=$row['nombre_producto'];
            $descripcion_producto=$row['descripcion_producto'];
						$status_producto=$row['status_producto'];
						$categoria_producto=$row['id_categoria'];
						$stock=$row['stock'];
						if ($status_producto==1){$estado="Activo";}
						else {$estado="Inactivo";}
						$precio_producto=$row['precio_producto'];
            $precio_pro_compra=$row['precio_pro_compra'];
            $iva=$row['iva'];
					?>

					<input type="hidden" value="<?php echo $codigo_producto;?>" id="codigo_producto<?php echo $id_producto;?>">
					<input type="hidden" value="<?php echo $nombre_producto;?>" id="nombre_producto<?php echo $id_producto;?>">
          <input type="hidden" value="<?php echo $descripcion_producto;?>" id="descripcion_producto<?php echo $id_producto;?>">
          <input type="hidden" value="<?php echo $status_producto;?>" id="status_producto<?php echo $id_producto;?>">
					<input type="hidden" value="<?php echo $categoria_producto;?>" id="categoria_producto<?php echo $id_producto;?>">
          <input type="hidden" value="<?php echo number_format($precio_compra,2,'.','');?>" id="precio_pro_compra<?php echo $id_producto;?>">
					<input type="hidden" value="<?php echo number_format($precio_producto,2,'.','');?>" id="precio_producto<?php echo $id_producto;?>">
          <input type="hidden" value="<?php echo $iva;?>" id="iva<?php echo $id_producto;?>">
          <input type="hidden" value="<?php echo $stock;?>" id="stock<?php echo $id_producto;?>">

					<tr>

						<td><?php echo $codigo_producto; ?></td>
						<td ><?php echo $nombre_producto; ?></td>
						<td>
									<?php
										$query_categoria=mysqli_query($con,"select * from categorias order by nombre_categoria");
										while($rw=mysqli_fetch_array($query_categoria))	{
									?>
									<?php if ($categoria_producto==$rw['id_categoria'])
									echo $rw['nombre_categoria'];?>
									<?php
										}
									?>

						</td>
						<td>$<span class='pull-right'><?php echo number_format($precio_producto,2);?></span></td>
						<td><?php echo $estado;?></td>
						<td><?php echo $stock; ?></td>
					<td ><span class="pull-right">
					<a href="#" class='btn btn-default' title='Editar producto' onclick="obtener_datos('<?php echo $id_producto;?>');" data-toggle="modal" data-target="#myModal2"><i class="glyphicon glyphicon-edit"></i></a></span>


					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan=6><span class="pull-right"><?
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>
			</div>
			<?php
		}
	}
?>

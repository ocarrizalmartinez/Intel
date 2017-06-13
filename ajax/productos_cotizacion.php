<?php
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");

	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){

		     $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		 $aColumns = array('codigo_producto', 'nombre_producto');
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
		include 'pagination.php';

		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 5;
		$adjacents  = 4;
		$offset = ($page - 1) * $per_page;

		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './index.php';

		$sql="SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);

		if ($numrows>0){

			?>
			<div class="table-responsive">
			  <table class="table">
				<tr style="background-color:lightgreen">
					<th>Código</th>
					<th>Producto</th>
					<th>Departamento</th>
					<th><span class="pull-right">Cantidad</span></th>
					<th><span class="pull-right">Precio</span></th>
					<th style="width: 36px;"></th>
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
					$id_producto=$row['id_producto'];
					$codigo_producto=$row['codigo_producto'];
					$nombre_producto=$row['nombre_producto'];
					$id_marca_producto=$row['id_categoria'];
					$sql_marca=mysqli_query($con, "select nombre_categoria from categorias where id_categoria='$id_marca_producto'");
					$rw_marca=mysqli_fetch_array($sql_marca);
					$nombre_marca=$rw_marca['nombre_categoria'];
					$precio_venta=$row["precio_producto"];
					$precio_venta=number_format($precio_venta,2);
					?>
					<tr>
						<td><? echo $codigo_producto; ?></td>
						<td><? echo $nombre_producto; ?></td>
						<td ><? echo $nombre_marca; ?></td>
						<td class='col-xs-1'>
						<div class="pull-right">
						<input type="text" class="form-control" style="text-align:right" id="cantidad_<? echo $id_producto; ?>"  value="1" >
						</div></td>
						<td class='col-xs-2'><div class="pull-right">
						<input type="text" class="form-control" style="text-align:right" id="precio_venta_<? echo $id_producto; ?>"  value="<? echo $precio_venta;?>" >
						</div></td>
						<td ><span class="pull-right"><a href="#" onclick="agregar('<? echo $id_producto ?>')"><i class="glyphicon glyphicon-plus"></i></a></span></td>
					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan=5><span class="pull-right"><?
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>
			</div>
			<?php
		}
	}
?>

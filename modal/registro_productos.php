	<?php
		if (isset($con))
		{
	?>
	<div class="modal fade" id="nuevoProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo producto</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_producto" name="guardar_producto">
			<div id="resultados_ajax_productos"></div>
			  <div class="form-group">
				<label for="codigo" class="col-sm-3 control-label">Código</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código del producto" required>
				</div>
			  </div>

			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto" required>
				</div>
			  </div>

				<div class="form-group">
				<label for="descripcion" class="col-sm-3 control-label">Descripcion</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion del producto" required maxlength="255" ></textarea>
				</div>
				</div>

				<div class="form-group">
				<label for="estado" class="col-sm-3 control-label">Estado</label>
				<div class="col-sm-8">
				 <select class="form-control" id="estado" name="estado" required>
					<option value="" selected> Selecciona estado </option>
					<option value="1">Activo</option>
					<option value="0">Inactivo</option>
				  </select>
				</div>
			  </div>

			  <div class="form-group">
				<label for="categoria" class="col-sm-3 control-label">Categoría</label>
				<div class="col-sm-8">
					<select class='form-control' name='categoria' id='categoria' required>
						<option value="">Selecciona una categoría</option>
							<?php
							$query_categoria=mysqli_query($con,"select * from categorias order by nombre_categoria");
							while($rw=mysqli_fetch_array($query_categoria))	{
								?>
							<option value="<?php echo $rw['id_categoria'];?>"><?php echo $rw['nombre_categoria'];?></option>
								<?php
							}
							?>
					</select>
				</div>
			  </div>

				<div class="form-group">
					<label for="precio_compra" class="col-sm-3 control-label">Precio compra</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" id="precio_compra" name="precio_compra" placeholder="Precio de compra del producto" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="8">
					</div>
				</div>

			<div class="form-group">
				<label for="precio" class="col-sm-3 control-label">Precio venta</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio de venta del producto" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="8">
				</div>
			</div>

			<div class="form-group">
			<label for="iva" class="col-sm-3 control-label">IVA</label>
			<div class="col-sm-8">
			 <select class="form-control" id="iva" name="iva" required>
				<option value="" selected>Selecciona</option>
				<option value="1">Aplica IVA</option>
				<option value="0">No aplica IVA</option>
				</select>
			</div>
			</div>

			<div class="form-group">
				<label for="stock" class="col-sm-3 control-label">Existencia</label>
				<div class="col-sm-8">
				  <input type="number" min="0" class="form-control" id="stock" name="stock" placeholder="Inventario inicial" required  maxlength="8">
				</div>
			</div>



		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>

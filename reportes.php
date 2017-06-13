<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		    exit;
  }

	require_once ("config/db.php");
	require_once ("config/conexion.php");
  ?>
  <head>

  <?php

	$active_pro="";
	$active_pedido="";
	$active_categoria="";
	$active_clientes="";
	$active_usuarios="";
	$active_reportes="active";
	$title="Reportes | Intetel";
?>
<?php include_once("head.php") ?>
<script language="javascript">
function Clickheretoprint()
{
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
      disp_setting+="scrollbars=yes,width=700, height=400, left=100, top=25";
  var content_vlue = document.getElementById("content").innerHTML;

  var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal;">');
   docprint.document.write(content_vlue);
   docprint.document.close();
   docprint.focus();
}
</script>


 <script language="javascript" type="text/javascript">

<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>
</head>

<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}
//$finalcode= 1;
//$finalcode='RS-'.createRandomPassword();
?>
<body>
<?php include('navbar.php');?>
			<div class="container">
			<div class="panel panel-success">
			<div class="panel-heading">
			<h4><i class='glyphicon glyphicon-stats'></i> Reportes</h4>
			</div>

			<div class="container-fluid">
      <div class="row-fluid">
					<div class="span10">
	  <div style="margin-top: -19px; margin-bottom: 21px;">
	    <button  style="float:right" class="btn btn-warning btn-mini"><a style="color:white" href="javascript:Clickheretoprint()" ><i class="glyphicon glyphicon-print"></i> Imprimir</button></a>
	  </div>
  <form action="reportes.php" method="get">
    <center>
			<strong>
				De : <input type="date" title="Selecciona una fecha de inicio" style="border-radius:50px; width: 223px; padding:8px;" name="d1" class="tcal" value="" />
				A: <input type="date" title="Selecciona una fecha final" style="border-radius:50px; width: 223px; padding:8px;" name="d2" class="tcal" value="" />
     		<button class="btn btn-success" style="width: 123px; height:35px; margin-top:-8px;margin-left:8px;" type="submit"><i class="glyphicon glyphicon-search"></i> Establecer</button>
    	</strong>
		</center>
  </form>
<div class="content" id="content">
	  <div style="font-weight:bold; text-align:center;font-size:14px;margin-bottom: 15px;">
			<?php if (isset($_GET['d1'])&&isset($_GET['d2'])) {
			?>
					<span><h2 style="color:lightgreen">Reporte de Inventario de&nbsp;<?php echo $_GET['d1']; ?>&nbsp;a&nbsp;<?php echo $_GET['d2']; ?></h2></span>
			<?php
				}
			?>
		</div>
		<hr>
	<table class="table table-hover" id="resultTable" data-responsive="table" style="text-align: left;">
		<thead>
			<tr>
				<th width="13%"> Id de Venta </th>
				<th width="13%"> Fecha Venta </th>
				<th width="20%"> Producto </th>
				<th width="16%"> Precio Compra</th>
				<th width="18%"> Existencia </th>
				<th width="10%"> Ganancia</th>

			</tr>
		</thead>
		<tbody>
				<?php
					include('config/conexion_reporte.php');
					if (isset($_GET['d1'])&&isset($_GET['d2'])) {
						$d1=$_GET['d1'];
						$d2=$_GET['d2'];

						$result = $cone->prepare("SELECT * FROM products WHERE date_added BETWEEN :a AND :b ORDER by date_added DESC ");
						$result->bindParam(':a', $d1);
						$result->bindParam(':b', $d2);
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++){
					?>
					<tr class="record">
					<td>PROD-00<?php echo $row['id_producto']; ?></td>
					<td><?php echo $row['date_added']; ?></td>
					<td><?php echo $row['nombre_producto']; ?></td>
					<td><?php echo formatMoney($row['precio_pro_compra'], true); ?></td>
					<td><?php
					$dsdsd=$row['stock'];
					echo $dsdsd;
					?></td>
					<td><?php
					$zxc=$row['ganancia_producto'];
					echo formatMoney($zxc, true);
					?></td>
					</tr>
					<?php
						}
					}


				?>

		</tbody>
		<thead>
			<tr>
				<th colspan="4" style="border-top:1px solid #999999"> Total: </th>
				<th colspan="1" style="border-top:1px solid #999999">
				<?php
					function formatMoney($number, $fractional=false) {
						if ($fractional) {
							$number = sprintf('%.2f', $number);
						}
						while (true) {
							$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
							if ($replaced != $number) {
								$number = $replaced;
							} else {
								break;
							}
						}
						return $number;
					}
					if (isset($_GET['d1'])&&isset($_GET['d2'])) {
						$d1=$_GET['d1'];
						$d2=$_GET['d2'];

						$results = $cone->prepare("SELECT sum(stock) FROM products WHERE date_added BETWEEN :a AND :b");
						$results->bindParam(':a', $d1);
						$results->bindParam(':b', $d2);
						$results->execute();

						for($i=0; $rows = $results->fetch(); $i++){
						echo $dsdsd=$rows['sum(stock)'];
						//echo formatMoney($dsdsd, true);
					}

					}
					?>
				</th>
					<th colspan="1" style="border-top:1px solid #999999">
				<?php
				if (isset($_GET['d1'])&&isset($_GET['d2'])) {

					$resultia = $cone->prepare("SELECT sum(ganancia_producto) FROM products WHERE date_added BETWEEN :c AND :d");
					$resultia->bindParam(':c', $d1);
					$resultia->bindParam(':d', $d2);
					$resultia->execute();
					for($i=0; $cxz = $resultia->fetch(); $i++){
					$zxc=$cxz['sum(ganancia_producto)'];
					echo formatMoney($zxc, true);
					}
					}
					?>

					</th>
			</tr>
		</thead>
	</table>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>


</div>
</div>


<?php
	include("footer.php");
?>

</body>
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){
	var element = $(this);
	var del_id = element.attr("id");
	var info = 'id=' + del_id;
	if(confirm("Sure you want to delete this update? There is NO undo!"))
	{

 	$.ajax({
   type: "GET",
   url: "deletesales.php",
   data: info,
   success: function(){

   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>

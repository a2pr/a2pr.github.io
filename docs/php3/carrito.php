<?php
session_start();
include "link.php";
include "cabecera.php";
$sql="select p.id_producto, p.nombre, p.precio, p.imagen, c.cantidad from producto as p, carrito as c where c.id_usuario=".$_SESSION['id_usuario']." and c.id_producto=p.id_producto ";
$query= mysqli_query($link,$sql);
$num=mysqli_num_rows($query);
if ($num==0) {?>
<script> alert("Su carrito esta vacio");</script> <?php
}else{
	?>
	<html>
	<head>
	<title> PHP 3 Carrito de Compra</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script language="javascript1.5" type="text/javascript">
	function eliminar(nom,idp,cant) {
		if (confirm("Esta seguro de eliminar el producto " + nom)) 
		{
		document.formae.idp.value = idp; 
		document.formae.cant.value = cant; 
		document.formae.submit();
		}
	}</script>
	</head>
	<body>
		<nav>
			<ul>
				<li><a href="#">Bienvenid@<?php echo  $_SESSION['nombre'];?></a></li>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="cierre.php">Salir</a></li>
			</ul>
		</nav>
		<div class="cont">
			<form name="forma1" method="post" action="precompra.php">
				<table class="iusu1">
				<caption>Carrito de compra</caption>
				<tr>
					<td><b>Nombre</b></td>
					<td><b>Imagen</b></td>
					<td><b>Cantidad</b></td>
					<td><b>Precio</b></td>
					<td><b>Total</b></td>
					<td><input type="hidden" name="val" value="6"><input type="hidden" name="numprod" value="<?php echo $num;?>"></td>
				</tr>
				<?php
				$todo=0;
				while ($row=mysqli_fetch_array($query)) {?>
				 	<tr>
				 	<td class="proc"><b><?php echo $row[1]; ?></b></td>
				 	<td class="proc"><img class="imgpro" src="images/<?php echo $row[3]; ?>"></td>
				 	<td class="proc"><b><?php echo $row[4];?><b/></td>
				 	<td class="proc"><b><?php echo $row[2];?></b></td>
				 	<td class="proc"><b><?php print $total=$row[2]*$row[4];?></b></td>
				 	<td class="proc"><a href="#" onclick="eliminar('<?php echo $row[1];?>','<?php echo $row[0];?>','<?php echo $row[4];?>')"><img class="icono" src="images/delete.png" alt="borrar" id="borra1"></a></td>
				 	</tr><?php
				 	$todo=$todo+$total;
				 }?>
				 <tr>
				 	<td class="total" colspan="6"><b><?php print "Total a pagar:".$todo; ?></b></td>
				 </tr>
				 <tr>
				 	<td class="boton" colspan="6"><input class="click" type="submit" value="PRE-PAGO"></td>
				 </tr>
			</table>
			</form>
			<form name="formae" method="post" action="validacion.php">
				<input type="hidden" name="val" value="5">
				<input type="hidden" name="idp" value="">
				<input type="hidden" name="cant" value="">
			</form>
		</div>
	</body>
	</html><?php
}?>
<?php
session_start();
include "link.php";
include "cabecera.php";
?>
<html>
<head>
	<title> PHP 3 Carrito de Compra</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="#">Bienvenid@<?php echo  $_SESSION['nombre'];?></a></li>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="cierre.php">Salir</a></li>
		</ul>
	</nav>
	<div class-"cont">
		<form method="post" action="validacion.php">
			<input type="hidden" name="numprod" value="<?php echo $_POST['numprod'];?>">
			<input type="hidden" name="val" value="6">
			<table class="iusu1">
				<caption>Revise el listado de articulos<br>antes de efectuar la compra</caption><br>
				<tr>
					<td><b>Cantidad</b></td>
					<td><b>Nombre</b></td>
					<td><b>Precio</b></td>
					<td><b>Totales</b></td>
				</tr>
				<?php
				$todo=0;
				$sql="select c.id_carrito, p.nombre, c.cantidad, p.precio, c.id_producto from carrito as c, producto as p where c.id_usuario='$_SESSION[id_usuario]' and c.id_producto=p.id_producto";
				$result= mysqli_query($link, $sql);
				$a=0;
				while ($vec=mysqli_fetch_array($result)) {?>
				 	<tr>
				 		<td class="proc"><b><?php print $vec[2]; ?></b></td>
				 		<td class="proc"><b><?php print $vec[1]; ?></b></td>
				 		<td class="proc"><b><?php print $vec[3]; ?></b></td>
				 		<td class="proc"><b><?php print $total=$vec[2]*$vec[3]; ?></b></td>
				 	</tr> <?php $todo=$todo+$total;
				 	$a++;
				 }?>
				 <tr>
				 	<td class="total" colspan="4">
				 		<b>Total a pagar:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print $todo;?></b></td>
				 	</tr>
				 	<tr>
				 		<td class="boton" colspan="4">
				 			<input type="hidden" name="total1" value="<?php print $todo; ?>">
				 			<input type="hidden" name="cant" value="<?php print $cant; ?>">
				 			<input type="hidden" name="pro" value="<?php print $pro; ?>">
				 			<input type="hidden" name="a" value="<?php print $a; ?>">
				 			<input class="click "type="submit" value="Comprar">&nbsp;&nbsp;&nbsp;
				 			<input class="click1" type="pago" id="pago" type="button" onclick="print()" value="Imprimir">
				 			
				 		</td>
				 	</tr>
			</table>
		</form>
	</div>
</body>
</html>
<?php session_start();
include "link.php";
include "cabecera.php";
$sql="select * from producto where id_producto='$_GET[pro]'";
$query= mysqli_query($link,$sql);
$vector= mysqli_fetch_array($query);
?>
<html>
<head>
	<title>PHP 3 carrito de compra</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="cont1">
			<table class="iusu">
				<tr>
					<td class="img"> <img class="imgpro" src="images/<?php echo $vector['imagen'];?>"></td>
					<td class="des">
						<b><?php echo "$vector[1]";?></b>
						<i>Precio</i>:Bs <?php echo "$vector[2]";?><br>
						<form id="form1" name="form1" method="post" action="validacion.php">
							<b>Cantidad:</b><input class="inen" type="text" name="cantidad"><br>
							<input type="hidden" name="id_producto" value="<?php echo "$vector[0]";?>">
							<input type="hidden" name="val" value="4">
							<input type="submit" value="agregar a carrito">
						</form>
					</td>
				</tr>
			</table>
	</div>
</body>
</html>
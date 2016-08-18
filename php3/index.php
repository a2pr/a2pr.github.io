<?php
session_start();
include "link.php";
include "cabecera.php";
$sql="select * from producto where cantidad>0";
$query= mysqli_query($link,$sql);
$num= mysqli_num_rows($query);
?>
<html>
	<head>
	<title> PHP 3 Carrito de Compra</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<nav>
			<ul>
				<?php 
				if (!isset($_SESSION['id_usuario'])) {
					?>
					<li><a href="login.php">Login</a></li>
					<li><a href="registrarse.php">Registrarse</a></li><?php
				}
				else {?>
					<li><a href="#">Bienvenid@<?php echo  $_SESSION['nombre'];?></a></li>
						<?php
						// tipo=0 administrador
						if ($_SESSION['tipo']==0) {?>
							<li><a href="producto.php">Productos</a></li><?php
						}
						else {?>
							<li><a href="carrito.php">Ver carrito</a></li><?php
					}?>
					<li><a href="cierre.php">Salir</a></li><?php
				}?>
			</ul>
		</nav>
		<div class="contimg">
			<div class="productos">
				<?php
				if ($num==0) {
					echo "No existen productos en este momento";
				}
				else {
					while($row= mysqli_fetch_array($query)){?>
						<div class="producto">
							<table class="iusu">
								<tr>
									<td class="img"> <img class="imgpro" src="images/<?php echo $row['imagen'];?>" name="img<?php echo $row['id'];?>"></td>
									<td class="des"> <b><?php echo $row['nombre'];?></b>
										<?php
										//tipo=1 usuario
										if (isset($_SESSION['tipo']) && $_SESSION['tipo']=='1'){?>
											<a href="agregar_carro.php?pro=<?php print $row[0];?>" ?>
												<img class="icono" src="carrito.png" id="carrito2"/></a><?php
										}?>
										<br>
										<i>Precio</i>: Bs.<?php echo $row['precio'];?><br>
										<i>Existencia</i>: <?php echo $row['cantidad'];?><br>
										<i>Descripcion</i>:<p class="desc"><?php echo $row['descripcion']; ?></P> 
									</td>
								</tr>
							</table>
						</div>
						<?php
					}
				}?>
			</div>
		</div>
		<form name="formac" method="post" action="validacion.php">
			<!--formulario para agregar productos al carrito-->
			<input type="hidden" name="val" value="4">
			<input type="hidden" name="idp" value="">
		</form>
	</body>
</html>
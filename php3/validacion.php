<?php
session_start();
include "link.php";
if (isset($_POST['val'])) {
	{
		switch ($_POST['val']) {
			case 1 ://autentificacion de usuario
				if (isset($_POST['email']) && $_POST['email']!='' && isset($_POST['password']) && $_POST['password']!='') {
					//llegaron los datos
					$sql="select * from usuario where email='$_POST[email]'";
					$query= mysqli_query($link,$sql);
					$num= mysqli_num_rows($query);
					if ($num==0) {?>
						<script> alert("No existe el usuario")</script><?php
					}
					else{
						//se encontro el registro
						$row= mysqli_fetch_array ($query);
												
						if ($row['password'] != md5($_POST['password'])) {
							//no coincide contrasenia?>
							<script> alert("contrasenia incorrecta");</script><?php
						}
						else{
							//autentificacion
							$_SESSION['id_usuario']= $row['id_usuario'];
							$_SESSION['nombre']= $row['nombre'];
							$_SESSION['apellido']= $row['apellido'];
							$_SESSION['cedula']= $row['cedula'];
							$_SESSION['tipo']= $row['tipo'];
						}
						}
				}
				else {?>
				<script> alert("Debe rellenar todos los datos");</script><?php
				}
				break;
			case 2://registro de usuarios
				if (isset($_POST['email']) && $_POST['email']!='' && isset($_POST['password']) && $_POST['password']!='' && isset($_POST['nombre']) && $_POST['nombre']!='' && isset($_POST['apellido']) && $_POST['apellido']!='' && isset($_POST['cedula']) && $_POST['cedula']!='') {
					
					$sql="insert into usuario values('','$_POST[email]','".md5($_POST['password'])."','$_POST[nombre]','$_POST[apellido]','$_POST[cedula]','usuario')";
					mysqli_query($link,$sql);
					if (mysql_error()) {?>
						<script> alert("Error en el registro del usuario. Intente de nuevo.");</script> <?php
					}
					else{
						//sin error?>
						<script> alert("Usuario registrado exitosamente."); </script> <?php	
					}
				}
				else {
					//no se reciben los datos?>
					<script> alert("Debe rellenar todos los datos."); </script> <?php
				}
				break;
			case 3: //carga de productos en la tienda
				if (isset($_FILES['img']['name']) && $_FILES['img']['name']!='' && isset($_POST['nombre']) && $_POST['nombre']!='' && isset($_POST['precio']) && $_POST['precio']!='' && isset($_POST['cantidad']) && $_POST['cantidad']!='' && isset($_POST['descripcion']) && $_POST['descripcion']!='') {
					//se reciben los datos
					$temporal= $_FILES['img']['tmp_name'];
					$arch= $_FILES['img']['name'];
					$tipo=getimagesize($temporal); // en el indice 2 del arreglo que crea la funcion, indicara que tipo de imagen es.
					if ($tipo[2]!=1 && $tipo[2]!=2 && $tipo[2]!=3) {
						// 1(gif) 2(jpg) 3(png)?>
						<script> alert("TIpo de imagen no permitido.");</script> <?php
					}
					else {
						//el tipo de imagen es correcta
						if (copy($temporal, 'images/'.$arch)) {
							$sql= "insert into producto values('','$_POST[nombre]','$_POST[precio]','$_POST[cantidad]','$_POST[descripcion]','$arch')";
							mysqli_query($link, $sql);
							if (mysqli_error($link)) {
								//error en la insercion ?>
								<script> alert("Error en la carga de datos");</script> <?php
							}
							else{
								//se cargo exitosamente el archivo?>
								<script> alert("El producto ha sido ingresado al sistema");</script>  <?php
							}
						}
						else {
							?>
							<script> alert("Error en la carga de la foto. Intente de nuevo");</script>  <?php
						}
					}
				}
				else {
					//no se reciben los datos?>
					<script> alert("Debe rellenar todos los datos");</script> <?php
				}
			break;
			case 4:// carga de producto en el carrito
			date_default_timezone_set('America/Caracas');
			$fecha=date('Y-m_d h:i:s');
			$sql="insert into carrito values('','$_SESSION[id_usuario]','$_POST[id_producto]','$_POST[cantidad]','$fecha')";
			mysqli_query($link,$sql);
			print_r(mysql_error());
			if (mysqli_error($link)) {?>
				<script> alert("Error en la carga de producto al carrito");</script> <?php
			} else{
				$sql1="update producto set cantidad= cantidad - '$_POST[cantidad]' where id_producto = '$_POST[id_producto]'";
				mysqli_query($link,$sql1);
				print_r(mysql_error());?>
				<script > alert("El producto ha sido agregado en su carrito"); </script> <?php
			}
			break;
			case 5://eliminacion de productos en el carrito
			$sql= "delete from carrito where id_usuario='$_SESSION[id_usuario]' and id_producto='$_POST[idp]'";
			mysqli_query($link,$sql);
			if (mysqli_error($link)) {?>
				<script> alert("Error en la eliminacion del producto"); </script> <?php
			} else{
				$sql1="update producto set cantidad=cantidad + '$_POST[cant]' where id_producto='$_POST[idp]'";
				mysqli_query($link,$sql1);?>
				<script> alert("El producto ha sido eliminado exitosamente");</script> <?php
			}
			break;
			case 6://compra de productos
			date_default_timezone_set('America/Caracas');
			$fecha=date('Y-m_d h:i:s');
			$sql="insert into compra values('','$_SESSION[id_usuario]','$fecha','$_POST[total1]')";
			mysqli_query($link,$sql);
			if (mysqli_error($link)) {?>
				<script> alert("Error en la compra. Intente nuevamente");</script> <?php
			} else{
				$sql="select max(id_compra) from compra where id_usuario=$_SESSION[id_usuario]";
				$query= mysqli_query($link,$sql);
				$idc= mysqli_fetch_array($query);
				//se eliminar el producto del carrito
				$sql="delete from carrito where id_usuario='$_SESSION[id_usuario]'";
				mysqli_query($link,$sql);
				?>

				<script> alert("Su compra se ha efectuado. Gracias por preferirnos");</script> <?php
			}
			break;
		}
	}
}?>
<meta http-equiv="refresh" content="0;URL=index.php">
<?php
session_start();
include "cabecera.php";?>
<html>
	<head>
		<title>PHP 3 carrito de compra</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
	<nav>
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="registrar.php">Registrarse</a></li>
			
			
		</ul>
	</nav>
	<div class="cont">
	<form action="validacion.php" method="post">
	<table class="iusu">
		<caption>Introduzca su usuario</caption>
	<tr>
		<td class="asignacion"><b>Correo:</b></td>
		<td class="entrada"><input class="inen" name="email" type="text" placeholder="ejemplo@hotmail.com" value=""></td>
	</tr>
	<tr>
		<td class="asignacion"><b>Password:</b></td>
		<td class="entrada"><input class="inen" name="password" type="password" value=""></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input  type="hidden" name="val" value="1">
			<input class="click" type="submit" value="Enviar">&nbsp;&nbsp;&nbsp;<input class="click" type="reset" value="Borrar"></td>
	</tr>
	</table>
	</form>
	</div>
	</body>
</html>
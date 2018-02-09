<?php
$ip = 'localhost';
$usuario = 'root';
$password = '';
$db_name = 'db_santgar';
$conn = mysql_pconnect($ip,$usuario,$password) or die("Problema al conectar con el host");

$huboerror = mysql_select_db($db_name,$conn) or die("Problema al conectar con la base de datos");

if ( !empty($_POST['submit']) ) {
$query = "INSERT INTO resultados (email,nombre,apellidoPat,apellidoMat,estado) values ('{$_POST['email']}','{$_POST['nombre']}','{$_POST['apellidoPat']}','{$_POST['apellidoMat']}','{$_POST['estado']}')";
mysql_query($query, $conn);
	}
	echo "Los datos han sido insertados correctamente"
?>

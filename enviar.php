<?
$servidor = "localhost";
$usuario = 'root';
$password = '';
$db_name = 'db_santgar';


$mysqli = new mysqli(servidor,usuario,password) or die();

$huboerror = mysql_select_db($db_name,$mysqli) or die();

if ( !empty($_POST['submit']) ) {
$query = "INSERT INTO `resultados` (email,nombre,apellidoPat,apellidoMat,estado) values ('{$_POST['email']}','{$_POST['nombre']}','{$_POST['apellidoPat']}','}{$_POST['apellidoMat']}','}{$_POST['estado']}')";
$response = mysql_query($query, $mysqli);
}
?>
<?php
$servidor="localhost";//el servidor que utilizaremos//
$usuario="edinson"; //el usuario es edinson//
$contraseha="12345";//nuestra contraseña//
$BD="hogar";//el nombre de la base de datos//

$conexion = @mysql_connect($servidor, $usuario,$contraseña );

if(!$conexion){
	die("<strong>no puede conectarce:</strong>".mysql_error());
}else{
	echo "Conectado satifactoriamente al servidor <br/>";
}
mysql_select_db($BD,$conexion) or die(mysql_error($conexion));
?>

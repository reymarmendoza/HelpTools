<?php

	include("datos.php");
	include("funciones.php");

	if (conectarBase($host,$usuario,$clave,$base)) {

		if (isset($_POST["nombre"],$_POST["apellido"],$_POST["niut"],$_POST["codigo"],$_POST["mes"],$_POST["valor"]) AND $_POST["nombre"]<>""  AND $_POST["apellido"]<>"" AND $_POST["niut"]<>"" AND $_POST["codigo"]<>"" AND $_POST["valor"]<>"") {

			$nombre    = $_POST["nombre"];
			$apellido  = $_POST["apellido"];
			$niut      = $_POST["niut"];
			$codigo    = $_POST["codigo"];
			$mes       = $_POST["mes"];
			$valor     = $_POST["valor"];

			$consulta = "INSERT INTO pago(id,nombre,apellido,niut,mes,codigo,valor) VALUES('0','$nombre','$apellido','$niut','$codigo','$mes','$valor')";

			if (mysql_query($consulta)) {
				echo'<script>alert("Registro guardado")</script>';
				echo"<script>location.href='ingresar.php'</script>";
			} else {
				echo'<script>alert("No se pudo guardar el regsitro")</script>';
				echo"<script>location.href='formulario.html'</script>";
			}
			



			
		} else {
			echo"<p>por fvor rgistrar de nuevo<a href='formulario.html'>Formulario</p";
		}
		
		
	} else {
		echo"No Hay Conexion con a base de datos del servidor revisar los datos de la base datos";
	}
	



?>



	
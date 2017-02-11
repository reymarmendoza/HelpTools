<?php

	include("datos.php");
	include("funciones.php");

	if (conectarBase($host,$usuario,$clave,$base)) {

		if (isset($_POST["nombre"],$_POST["apellidos"],$_POST["nuip"],$_POST["edad"],$_POST["direccion"],$_POST["barrio"],$_POST["acudiente"],$_POST["madre"],$_POST["padre"],$_POST["vacunacion"],$_POST["desarrollo"],$_POST["telefono"]) AND $_POST["nombre"]<>"" AND $_POST["apellidos"]<>"" AND $_POST["nuip"]<>"" AND $_POST["edad"]<>"" AND $_POST["direccion"]<>"" AND $_POST["barrio"]<>"" AND $_POST["acudiente"]<>"" AND $_POST["madre"]<>"" AND $_POST["padre"]<>""  AND $_POST["vacunacion"]<>"" AND $_POST["desarrollo"]<>"" AND $_POST["telefono"]<>""){

			$nombre    = $_POST["nombre"];
			$apellido  = $_POST["apellidos"];
			$nuip      = $_POST["nuip"];
			$edad    = $_POST["edad"];
			$direccion  = $_POST["direccion"];
			$barrio      = $_POST["barrio"];
			$acudiente      = $_POST["acudiente"];
			$madre     = $_POST["madre"];
			$padre     = $_POST["padre"];
			$vacunacion      = $_POST["vacunacion"];
			$desarrollo     = $_POST["desarrollo"];
			$telefono     = $_POST["telefono"];
			

			$consulta = "INSERT INTO usuarios(id,nombre,apellidos,nuip,edad,direccion,barrio,acudiente,madre,padre,vacunacion,desarrollo,telefono) VALUES('0','$nombre','$apellido','$nuip','$edad','$direccion','$barrio','$acudiente','$madre','$padre','$vacunacion','$desarrollo','$telefono')";

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
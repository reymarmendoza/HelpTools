<?php
function conectarBase($host,$usuario,$clave,$base){

	if (!$enlace = @mysql_connect($host,$usuario,$clave)){

		return false;
	
	} elseif (!mysql_select_db($base)){
	
		return false;
	
	} else {
	
		return true;
	
	}

}

function consultar($consulta){

	if (!$datos = mysql_query($consulta) or mysql_num_rows($consulta)<1){

		return false; // si fue rechazada la consulta por errores de sintaxis, o ning�n registro coincide con lo buscado, devolvemos false

	} else {

		return $datos; // si se obtuvieron datos, los devolvemos al punto en que fue llamada la funci�n
		
	}
}
?>













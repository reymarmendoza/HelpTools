<html><meta charset="UTF-8"></html>
<?php
    $cn=mysqli_connect("mysql.2freehosting.com","u996225205_hogar","Gn967KTVW6","u996225205_hogar")or die("Error de conexion"); 
    //capturar datos del formulario html
    $User=$_POST["Usuario"];
    $Pass=$_POST["Contrasena"];
    //buscar la pareja usuario contraseña y capturar el num de reps
    $Validacion=mysqli_query($cn,"SELECT * FROM Usuarios WHERE Usuario='$User' and Contrasena='$Pass'");
    $Rep=mysqli_num_rows($Validacion);
    //si no se repite echo, si se repite validar el perfil
    if($Rep==NULL){
        echo 'El usuario o la contraseña son incorrectos';
    }else{//validar el perfil del acceso para mostrar opciones
        $Permission=mysqli_fetch_array($Validacion);  
        switch($Permission[Perfil]){
            case 1:
                header("Location:Perfil1.html");
                break;
            case 2:
                header("Location:Perfil2.html");
                break;
            case 3:
                header("Location:Perfil3.html");
                break;
        }
    }  
?>
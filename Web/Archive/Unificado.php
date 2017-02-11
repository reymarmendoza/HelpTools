<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <!--<form  class="" method="POST" action="PHP/ConectarConsulta.php">  -->
    <div class="consultas"><!--hago que el label y el input se junten como si fuera un solo elemnto visualmente estan juntos-->
        <form action="Unificado.php" method="POST">
            <label for="nombre">Id:</label>
            <input class="form-control" name="nombre" id="nombre"  type="text"  placeholder="Identifiacion"><!--placeholder me da una marca de agua dentro del campo de texto-->
            <button onclick="buscar()">Consultar</button>
        </form>
    </div>
<?php     
    $var=$_POST["nombre"];
    $cn=mysqli_connect("mysql.2freehosting.com","u996225205_hogar","Gn967KTVW6","u996225205_hogar")or die("Error de conexion");   
    $exe=mysqli_query($cn,"SELECT * FROM pagos WHERE Id = '$var'");
    $result= mysqli_fetch_array($exe);
?>
    <div class="meses"><!--hago que el label y el input se junten como si fuera un solo elemnto visualmente estan juntos-->
        <label for="Ene">Enero:</label>
        <?php                
            if(isset($result)){
        ?>
            <input type="date" name="Ene" value="<?php echo $result[1]?>" disabled/>
        <?php                    
            }else{
        ?>
            <input type="date" name="Ene" value="" disabled>
        <?php                    
            }                
        ?>
        <label for="Feb">Febrero:</label>
        <?php                
            if(isset($result)){
        ?>
            <input type="date" name="Feb" value="<?php echo $result[2]?>" disabled/>
        <?php                    
            }else{
        ?>
            <input type="date" name="Feb" value="" disabled>
        <?php                    
            }                
        ?>
        <label for="Mar">Marzo:</label>
        <?php                
            if(isset($result)){
        ?>
            <input type="date" name="Mar" value="<?php echo $result[3]?>" disabled/>
        <?php                    
            }else{
        ?>
            <input type="date" name="Mar" value="" disabled>
        <?php                    
            }                
        ?>
        <label for="Ene">Abril:</label>
        <?php                
            if(isset($result)){
        ?>
            <input type="date" name="Abr" value="<?php echo $result[4]?>" disabled/>
        <?php                    
            }else{
        ?>
            <input type="date" name="Abr" value="" disabled>
        <?php                    
            }                
        ?>
        <label for="Feb">Mayo:</label>
        <?php                
            if(isset($result)){
        ?>
            <input type="date" name="May" value="<?php echo $result[5]?>" disabled/>
        <?php                    
            }else{
        ?>
            <input type="date" name="May" value="" disabled>
        <?php                    
            }                
        ?>
        <label for="Mar">Junio:</label>
        <?php                
            if(isset($result)){
        ?>
            <input type="date" name="Jun" value="<?php echo $result[6]?>" disabled/>
        <?php                    
            }else{
        ?>
            <input type="date" name="Jun" value="" disabled>
        <?php                    
            }                
        ?>
        <label for="Ene">Julio:</label>
        <?php                
            if(isset($result)){
        ?>
            <input type="date" name="Jul" value="<?php echo $result[7]?>" disabled/>
        <?php                    
            }else{
        ?>
            <input type="date" name="Jul" value="" disabled>
        <?php                    
            }                
        ?>
        <label for="Feb">Agosto:</label>
        <?php                
            if(isset($result)){
        ?>
            <input type="date" name="Ago" value="<?php echo $result[8]?>" disabled/>
        <?php                    
            }else{
        ?>
            <input type="date" name="Ago" value="" disabled>
        <?php                    
            }                
        ?>
        <label for="Mar">Septiembre:</label>
        <?php                
            if(isset($result)){
        ?>
            <input type="date" name="Sep" value="<?php echo $result[9]?>" disabled/>
        <?php                    
            }else{
        ?>
            <input type="date" name="Sep" value="" disabled>
        <?php                    
            }                
        ?>
        <label for="Ene">Octubre:</label>
        <?php                
            if(isset($result)){
        ?>
            <input type="date" name="Oct" value="<?php echo $result[10]?>" disabled/>
        <?php                    
            }else{
        ?>
            <input type="date" name="Oct" value="" disabled>
        <?php                    
            }                
        ?>
        <label for="Feb">Noviembre:</label>
        <?php                
            if(isset($result)){
        ?>
            <input type="date" name="Nov" value="<?php echo $result[11]?>" disabled/>
        <?php                    
            }else{
        ?>
            <input type="date" name="Nov" value="" disabled>
        <?php                    
            }                
        ?>
        <label for="Mar">Diciembre:</label>
        <?php                
            if(isset($result)){
        ?>
            <input type="date" name="Dic" value="<?php echo $result[12]?>" disabled/>
        <?php                    
            }else{
        ?>
            <input type="date" name="Dic" value="" disabled>
        <?php                    
            }                
        ?>
    </div> 
    
    <script type="text/javascript">
        function buscar(){
            var opcion = document.getElementById('nombre').value;//capturo el valor del campo de texto
        }
    </script>

    <?php     
        $fecha=$_POST["fecha"];
        $Id=$_POST["nombre"];

        $cn=mysqli_connect("mysql.2freehosting.com","u996225205_hogar","Gn967KTVW6","u996225205_hogar")or die("Error de conexion");   
        //$exe=mysqli_query($cn,"SELECT * FROM registro");
        $exe=mysqli_query($cn,"SELECT * FROM pagos WHERE Id = '$Id'");
        $result= mysqli_fetch_array($exe);
        //mysqli_free_result($result);
        if((empty($result['Ene']))||("0000-00-00")){
            $result=mysqli_query($cn,"UPDATE pagos SET Ene = '$fecha' WHERE Id = '$Id'") or die ("Falló Consulta");   
        }else if ((empty($result['Feb']))||("0000-00-00")){
            $result=mysqli_query($cn,"UPDATE pagos SET Feb = '$fecha' WHERE Id = '$Id'") or die ("Falló Consulta");   
        }else if ((empty($result['Mar']))||("0000-00-00")){
            $result=mysqli_query($cn,"UPDATE pagos SET Mar = '$fecha' WHERE Id = '$Id'") or die ("Falló Consulta");   
        }else if ((empty($result['Abr']))||("0000-00-00")){
            $result=mysqli_query($cn,"UPDATE pagos SET Abr = '$fecha' WHERE Id = '$Id'") or die ("Falló Consulta");   
        }else if ((empty($result['May']))||("0000-00-00")){
            $result=mysqli_query($cn,"UPDATE pagos SET May = '$fecha' WHERE Id = '$Id'") or die ("Falló Consulta");   
        }else if ((empty($result['Jun']))||("0000-00-00")){
            $result=mysqli_query($cn,"UPDATE pagos SET Jun = '$fecha' WHERE Id = '$Id'") or die ("Falló Consulta");   
        }else if ((empty($result['Jul']))||("0000-00-00")){
            $result=mysqli_query($cn,"UPDATE pagos SET Jul = '$fecha' WHERE Id = '$Id'") or die ("Falló Consulta");   
        }else if ((empty($result['Ago']))||("0000-00-00")){
            $result=mysqli_query($cn,"UPDATE pagos SET Ago = '$fecha' WHERE Id = '$Id'") or die ("Falló Consulta");   
        }else if ((empty($result['Sep']))||("0000-00-00")){
            $result=mysqli_query($cn,"UPDATE pagos SET Sep = '$fecha' WHERE Id = '$Id'") or die ("Falló Consulta");   
        }else if ((empty($result['Oct']))||("0000-00-00")){
            $result=mysqli_query($cn,"UPDATE pagos SET Oct = '$fecha' WHERE Id = '$Id'") or die ("Falló Consulta");   
        }else if ((empty($result['Nov']))||("0000-00-00")){
            $result=mysqli_query($cn,"UPDATE pagos SET Nov = '$fecha' WHERE Id = '$Id'") or die ("Falló Consulta");   
        }else if ((empty($result['Dic']))||("0000-00-00")){
            $result=mysqli_query($cn,"UPDATE pagos SET Dic = '$fecha' WHERE Id = '$Id'") or die ("Falló Consulta");   
        }
    ?>
</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
  <link rel="icon" type="image/png" sizes="32x32" href="Imagenes/favicon-32x32.png">
  
</head>

<body>
<thead>
    <center>
    <?php
    try {
        $conexion = new
            PDO("mysql:host=localhost;dbname=registros;charset=utf8", "root", "");
    } catch (PDOException $e) {
        echo "No se ha podido establecer conexion con el servidor.<br>";
        die("Error: " . $e->getMessage());
    }
    $id = $_POST['id'];
    $Cedula = $_POST['Cedula'];
    $nombre = $_POST['nombre'];
    $ARL = $_POST['ARL'];
    $RH = $_POST['RH'];
    $Casilla = $_POST['Casilla'];
    $Fecha = $_POST['Fecha'];
    $hora = $_POST['hora'];
    $persona = $_POST['persona'];
    $Empresa = $_POST['Empresa'];
    $lectura = $_POST['lectura'];
    $equipo = $_POST['equipo'];
    $Total = $_POST['Total'];
    $Marca = $_POST['Marca'];
    $Serie = $_POST['Serie'];
    $salidah = $_POST['salidah'];
    
    $actualizar = "UPDATE registros SET Cedula='$Cedula',nombre='$nombre', ARL='$ARL',RH='$RH', Casilla='$Casilla',Fecha='$Fecha',hora='$hora',persona='$persona',Empresa='$Empresa',lectura='$lectura',equipo='$equipo',Total='$Total',Marca='$Marca',Serie='$Serie',salidah='$salidah' WHERE id=$id";
    $conexion->exec($actualizar);
   
    echo "Registro actualizado correctamente.<br><a href='mostrar.php'>Volver</a>";
    ?>
    </center>

</body>

</html>
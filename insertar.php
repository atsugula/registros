<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<center>
<body>
    <?php

    try {
        $conexion = new
            PDO("mysql:host=localhost;dbname=registros;charset=utf8", "root", "");
    } catch (PDOException $e) {
        echo "No se ha podido establecer conexion con el servidor.<br>";
        die("Error: " . $e->getMessage());
    }

    $consulta = $conexion->query("SELECT id FROM registros WHERE id=" . $_POST['id']);
    if ($consulta->rowCount() > 0) {
    ?>
        Ya exite un registro con ID <?= $_POST['id'] ?><br>
        Por favor, vuelva a la <a href="index.php">pagina de agregar registro</a>
    <?php
    } else {
        $insercion = "INSERT INTO registros( id, Cedula, nombre, ARL, 	RH, Casilla, Fecha, hora, persona, Empresa, equipo, lectura,Total,Marca,Serie, salidah) VALUES
('$_POST[id]','$_POST[Cedula]','$_POST[nombre]','$_POST[ARL]','$_POST[RH]','$_POST[Casilla]','$_POST[Fecha]','$_POST[hora]','$_POST[persona]','$_POST[Empresa]','$_POST[equipo]','$_POST[lectura]','$_POST[Total]','$_POST[Marca]','$_POST[Serie]','$_POST[salidah]')";
        $conexion->exec($insercion);
        echo "Persona registrada correctamente.<br><a 
        href='index.php'>Volver<a>.";
    }
    ?>
</center>
    
</body>

</html>
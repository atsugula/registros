<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
  <link rel="icon" type="image/png" sizes="32x32" href="Imagenes/favicon-32x32.png">
  
</head>

<body>
    <center>
    <?php

    try {
        $conexion = new
            PDO("mysql:host=localhost;dbname=registros;charset=utf8", "root", "");
    } catch (PDOException $e) {
        echo "No se ha podido establecer conexion con el servidor.<br>";
        die("Error: " . $e->getMessage());
    }
    $borrado = "DELETE FROM registros WHERE id = " . $_GET['id'];
    $conexion->exec($borrado);
    echo "Registro eliminada correctamente.<br><a
href='mostrar.php'>Volver</a>";
    ?>
</body>
</center>
</html>
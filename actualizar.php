<!DOCTYPE html>
<html>
<style>
body{
  background: url(imagenes/wall.jpg);
  background-size: 100%;
}

</style>
<head>
    <meta charset="UTF-8">
    <title>Actualizar Datos</title>
    <link rel="icon" type="image/png" sizes="32x32" href="Imagenes/favicon-32x32.png">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
   
    <?php
    $id = $_GET['id'];

    try {
        $conexion = new
            PDO("mysql:host=localhost;dbname=registros;charset=utf8", "root", "");
    } catch (PDOException $e) {
        echo "No se ha podido establecer conexion con el servidor.<br>";
        die("Error: " . $e->getMessage());
    }
    $consulta = $conexion->query("SELECT id,Cedula, nombre, ARL, 	RH,
Casilla, Fecha, hora, persona, Empresa, equipo,  lectura,Total,Marca,Serie, salidah FROM registros WHERE id=$id");
    ?>
    <h1>
        <center>
        Actualizar datos<br></h1>
        </center>
    </h2>
    <form action="actualizarx2.php" method="post">
        <?php
        while ($cliente = $consulta->fetchObject()) {
        ?>
            <label hidden>ID <input type="number" name="id" readonly value="<?= $cliente->id ?>"></label><br>
            Cedula <input type="number" name="Cedula" readonly value="<?= $cliente->Cedula ?>"><br>
            Nombre <input type="text" name="nombre" value="<?= $cliente->nombre ?>"><br>
            ARL <input type="text" name="ARL" value="<?= $cliente->ARL ?>"><br>
            <label for="RH">RH</label>
        <input name="RH" id="RH" type="text" readonly value="<?= $cliente->RH ?>"><br>
        <label for="Casilla">Casilla</label>
        <input name="Casilla" id="Casilla" type="text" readonly value="<?= $cliente->Casilla ?>"><br>
            Fecha <input type="date" name="Fecha" readonly value="<?= $cliente->Fecha ?>"><br>
            Hora de ingreso <input type="time" name="hora" value="<?= $cliente->hora ?>"><br>
            Persona a visitar <input type="text" name="persona" readonly value="<?= $cliente->persona ?>"><br>
            Empresa <input type="text" name="Empresa" value="<?= $cliente->Empresa ?>"><br>
            <label for="Lectura">Lectura de instructivo</label>
            <input name="lectura" id="lectura" type="text" value="<?= $cliente->lectura ?>"><br>
            <br><br>
            <label for="equipo">Ingreso de equipo</label>
            <input name="equipo" id="equipo" type="text" readonly value="<?= $cliente->equipo ?>"><br>
            <br><br> 
            Total de equipos: <input type="text" name="Total" readonly value="<?= $cliente->Total ?>"><br>
            Marca: <input type="text" name="Marca" readonly value="<?= $cliente->Marca ?>"><br> 
            Serie: <input type="text" name="Serie" readonly value="<?= $cliente->Serie ?>"><br> 
            Hora de Salida <input type="time" name="salidah" value="<?= $cliente->salidah ?>"><br>
            <input type="submit" value="Enviar">
        <?php
        }
        ?>
        <marquee direction="right">©BY HEALTHY AMERICA S.A.S</marquee>
    </form>
    <br>
</body>
</html>
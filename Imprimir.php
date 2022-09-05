<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Imprimir</title>
    <link rel="icon" type="image/png" sizes="32x32" href="Imagenes/favicon-32x32.png">
    <link rel="stylesheet" href="estilos.css">
</head>
<style>


.R {
  position: relative;
  bottom: 73px;
  right: -330px;
  font-size: 25px;
  border: none;
}

.bottom {
  position: relative;
  bottom: 120px;
  right: -490px;
  font-size: 25px;
  width: 50px;
  border: 3px solid #000101;
}

.right {
  position: relative;
  bottom: 45px;
  right: -450px;
  font-size: 20px;
}
.empresa {
  position: relative;
  bottom: 130px;
  right: 00px;
  font-size: 25px;
  border: none;
}
.hora {
  position: relative;
  bottom: 500px;
  right: -510px;
  font-size: 30px;
}
.A {
  position: relative;
  bottom: 23px;
  right: 0px;
  font-size: 30px;
}
.C {
  position: relative;
  bottom: 20px;
  right: 00px;
  font-size: 30px;
}
.N {
  position: relative;
  bottom: 20px;
  right: 00px;
  font-size: 30px;
}
.B {
  position: relative;
  bottom: 30px;
  right: 00px;
  font-size: 30px;
}
</style>
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

        <?php
        while ($cliente = $consulta->fetchObject()) {
        ?>


         <p style="font-size: 30px">
        <div class="B">HEALTHY AMERICA COLOMBIA S.A.S. <br> 
        CONTROL DE INGRESO VISITANTE O CONTRATISTA
        
        <p style="font-size: 25px"> 
        <div class= "N">NOMBRE: <input type="text"  name="nombre" style="font-size: 25px" size="33" maxlength="10" value="<?= $cliente->nombre ?>">
        
        <p style="font-size: 25px">
        <div class="C">CC: <input type="number"  name="Cedula" style="font-size: 25px" size="5" maxlength="10" readonly value="<?= $cliente->Cedula ?>">
        
        <p style="font-size: 25px">
        <div class="A">ARL: <input type="text" name="ARL" style="font-size: 25px" size="8" maxlength="10" value="<?= $cliente->ARL ?>">
        
        <div class="R">  RH: <input type="text"  name="RH" id="RH" style="font-size: 25px" size="1" maxlength="10" value="<?= $cliente->RH ?>"></div>
        
        <p style="font-size: 25x">  
        <div class="bottom"><input type="text" style="font-size: 25px" name="Casilla" size="1" maxlength="-1" value="<?= $cliente->Casilla ?>"></div>
        
        <p style="font-size: 25px">
        <div class="empresa">EMPRESA: <input type="text" name="Empresa" style="font-size: 25px" size="23" maxlength="10" value="<?= $cliente->Empresa ?>">
        
        <div name="hora">HORA DE INGRESO: <input type="time" name="hora" style="font-size: 25px" value="<?= $cliente->hora ?>">
		
        <div class="right"><p>F0-GI-012 V-01 </p></div><br>


        <a onClick="window.print()">🖨️Imprimir</a>
            
 <center>
 <a href="mostrar.php"><h3>Volver al registro</h3></a>
 </center>
        <?php
        }
        ?>
</body>
</html>
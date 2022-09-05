<?php
// Llamado a la  base de datos
try {
  $conexion = new
      PDO("mysql:host=localhost;dbname=registros;charset=utf8", "root", "");
} catch (PDOException $e) {
  echo "No se ha podido establecer conexion con el servidor.<br>";
  die("Error: " . $e->getMessage());
}

if(isset($_GET['opcion'])){
  
  $sth1 = $conexion->prepare('SELECT * FROM registros WHERE Cedula = :opcion');
  
  $sth1->bindParam(':opcion', $_GET['opcion'], PDO::PARAM_INT);
  $sth1->execute();

  $result1 = $sth1->fetchAll();  

}

$sth = $conexion->prepare('SELECT Cedula, nombre, ARL, Empresa FROM registros');
$sth->execute();

$result = $sth->fetchAll();


?>

<!DOCTYPE html>
<!--- By Diego Toloza -->
<html>
<style>
.Bus {
  position: relative;
  bottom: 115px;
  right: -470px;
 
}
body{
  background: url(Imagenes/wall.jpg);
  background-size: 100%;
}
</style>
<head>
  <title>Registro</title>
  <link rel="icon" type="image/png" sizes="32x32" href="Imagenes/favicon-32x32.png">
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="css/select2.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>
<script type="text/javascript">
  function buscar(){
    var opcion = document.getElementById('UserN').value;
    window.location.href = 'http://localhost/PHP/Programa/Index.php?opcion='+opcion;
  }
</script>
<body>
  <center>
    <h1>Registro</h1>
  </center>
  <?php
//Llamado a la base de datos para guardar registros
  try {
    $conexion = new
      PDO("mysql:host=localhost;dbname=registros;charset=utf8", "root", "");
  } catch (PDOException $e) {
    echo "No se ha podido establecer conexion con el servidor.<br>";
    die("Error: " . $e->getMessage());
  }
  $consulta = $conexion->query("SELECT id,Cedula, nombre, ARL, 	RH,
Casilla, Fecha, hora, persona, Empresa, equipo,  lectura,Total,Marca,Serie, salidah  FROM registros");
 ?>
  <form action="mostrar.php">
    <input type="submit" value="Ver Registros" />
<div>
</form>
<div class="Bus"><Select name="UserN" id="UserN" class="select2" onchange="return buscar();">
  <?php
  if(isset($result1)) {?>
    <option value="<?php echo $result1[0] ['Cedula'];?>">
      <?php echo $result1[0]['Cedula'];?>
    </option>
    <?php
  }?>
  <option value="">🔎 Buscar por cedula</option>
  <?php
  foreach ($result as $key => $value) {?>
  <option value="<?php echo $value['Cedula'];?>"><?php echo $value['Cedula'];?></option>
  <?php
  //Formulario y llamado de datos al buscador
  }
  ?>
</Select>
</div>

<div class="form">
<form id="forminsertar" method="post" action="insertar.php">
<label hidden>ID:<input type="number" name="id" readonly/> </label>
      <label>Cedula:</label>
      <?php
      if (isset($result1)){?>
      <input type="number" name="Cedula" value="<?php echo $result1[0] ['Cedula']?>"/> 
      <?php
      }else {?>
      <input type="number" name="Cedula" value=""/>
      <?php
      }
      
      ?>
      <br /><br />
      <label>Nombre y apellido:</label>
      <?php
      if(isset($result1)){?>
      <input type="text" name="nombre" value="<?php echo $result1[0] ['nombre']?>"/> 
      <?php
      }else {?>
      <input type="text" name="nombre" value=""/>
      <?php
      }
      
      ?>
      <br /><br />
      <label>ARL:</label>
      <?php
      if(isset($result1)){?>
      <input type="text" name="ARL"  value="<?php echo $result1[0] ['ARL']?>"/> 
      <?php
      }else {?>
      <input type="text" name="ARL" value=""/>
      <?php
      }
      
      ?>
      <br /><br />
      <label for="RH">RH:</label>
      <label><select name="RH" id="RH" type="text"></label>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
      </select>
      <br><br>
      <label for="Casilla">Casilla:</label>
      <select name="Casilla" id="Casilla" type="text">
        <option value="N/A">N/A</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
      <br><br>
      Fecha: <input type="date" name="Fecha" /> <br /><br />
      Hora de ingreso AM/PM: <input type="time" name="hora"> <br /><br />
      Persona a visitar: <input type="text" name="persona"> <br /><br />
      <label>Empresa:</label>
      <?php
      if(isset($result1)){?>
      <input type="text" name="Empresa" value="<?php echo $result1[0] ['Empresa']?>"/> 
      <?php
      }else {?>
      <input type="text" name="Empresa" value=""/>
      <?php
      }
      ?>
      <br /><br />
      <label for="Lectura">Lectura de instructivo</label>
      <select name="lectura" id="lectura" type="number">
        <option value="Si">Si</option>
        <option value="No">No</option>
      </select>
      <br><br>
      <label for="ingreso">Ingreso de equipo de computo</label>
      <select name="equipo" id="equipo" class="equipo" type="text">
        <option value="No">No</option>
        <option value="Si">Si</option>
      </select>
      <br><br>
      <label for="total" class="equiposhidden" hidden>Total de equipos:</label>
      <input type="text" name="Total" id="total" class="equiposhidden" hidden> <br/><br/>
      <label for="marca" class="equiposhidden" hidden>Marca:</label>
      <input type="text" name="Marca" id="marca" class="equiposhidden" hidden> <br/><br/>
      <label for="marca" class="equiposhidden" hidden>Serie:</label>
      <br>
      <textarea type="text" class="equiposhidden" hidden name="Serie" placeholder="Solo caracteres numericos y letras" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" ></textarea> <br/><br/>
      
      
      Hora de Salida AM/PM: <input type="time" name="salidah"> <br/><br/>
      <input type="reset" value="Limpiar">
      <input type="submit" value="Guardar Datos">

      </a>
    </form> 
  </div>
  <!---->
  <script src="js/select2.min.js"></script>
  <script src="js/app.js"></script>
  <!-- <script src="js/jquery/jquery.js"></script>
  <script src="js/jquery/jquery.min.js"></script> -->
  <script language="JavaScript">
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
</body>
<marquee direction="right">©BY HEALTHY AMERICA S.A.S </marquee>
 
</html>
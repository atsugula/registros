<!DOCTYPE html>
<html>
<style>
.Bus {
  position: relative;
  bottom: 115px;
  right: -470px;
 
}
body{
  background: url(imagenes/walll1.jpg);
  background-size: 100%;
}
.color{
 color: white;
 background: #000000;
}
h4,h5{
    display: block;
    font-size: 2em;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
h5 {
    color: white;
 background: #000000;
}
</style>
<head>
    <title>Registros</title>
    <link rel="icon" type="image/png" sizes="32x32" href="Imagenes/favicon-32x32.png">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <center>
        <div class="color">
        <h4>Tabla de Registros</h4>
        </div>
    </center>
    <?php

    try {
        $conexion = new
            PDO("mysql:host=localhost;dbname=registros;charset=utf8", "root", "");
    } catch (PDOException $e) {
        echo "No se ha podido establecer conexion con el servidor.<br>";
        die("Error: " . $e->getMessage());
    }
    $consulta = $conexion->query("SELECT id,Cedula, nombre, ARL, 	RH,
Casilla, Fecha, hora, persona, Empresa, equipo, lectura,Total,Marca,Serie, salidah  FROM registros");


    ?>
    <meta charse="utf-8">
    <script language="javascript">
        function doSearch()
        {
            const tableReg = document.getElementById('datos');
            const searchText = document.getElementById('searchTerm').value.toLowerCase();
            let total = 0;
 
            // Recorremos todas las filas con contenido de la tabla
            for (let i = 1; i < tableReg.rows.length; i++) {
                // Si el td tiene la clase "noSearch" no se busca en su cntenido
                if (tableReg.rows[i].classList.contains("noSearch")) {
                    continue;
                }
 
                let found = false;
                const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
                // Recorremos todas las celdas
                for (let j = 0; j < cellsOfRow.length && !found; j++) {
                    const compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                    // Buscamos el texto en el contenido de la celda
                    if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {
                        found = true;
                        total++;
                    }
                }
                if (found) {
                    tableReg.rows[i].style.display = '';
                } else {
                    // si no ha encontrado ninguna coincidencia, esconde la
                    // fila de la tabla
                    tableReg.rows[i].style.display = 'none';
                }
            }
 
            // mostramos las coincidencias
            const lastTR=tableReg.rows[tableReg.rows.length-1];
            const td=lastTR.querySelector("td");
            lastTR.classList.remove("hide", "red");
            if (searchText == "") {
                lastTR.classList.add("hide");
            } else if (total) {
                td.innerHTML="Se ha encontrado "+total+" coincidencia"+((total>1)?"s":"");
            } else {
                lastTR.classList.add("red");
                td.innerHTML="No se han encontrado coincidencias";
            }
        }
    </script>
 <style>
        #datos {border:1px solid #ccc;padding:10px;font-size:1em;}
        #datos tr:nth-child(even) {background:#ccc;}
        #datos td {padding:5px;}
        #datos tr.noSearch {background:White;font-size:0.8em;}
        #datos tr.noSearch td {padding-top:10px;text-align:right;}
        .hide {display:none;}
        .red {color:Red;}
    </style>
</head>
 
<body>
        Buscar registros <input id="searchTerm" type="text" placeholder="Buscar por cedula" onkeyup="doSearch()" size="12" maxlength="10" />
    <p>

<action="mostrar.php" method="post" target="_blank">
</action=>


    <table id="datos">
        <tr>
            <td><b>ID</b></td>
            <td><b>Cedula</b></td>
            <td><b>Nombre y apellido</b></td>
            <td><b>ARL</b></td>
            <td><b>RH</b></td>
            <td><b>Casilla</b></td>
            <td><b>Fecha</b></td>
            <td><b>Hora de ingreso</b></td>
            <td><b>Persona a visitar</b></td>
            <td><b>Empresa</b></td>
            <td><b>Lectura de instructivo</b></td>
            <td><b>Ingreso de equipo</b></td>
            <td><b>Total de equipos</b></td>
            <td><b>Marca</b></td>
            <td><b>Serie</b></td>
            <td><b>Hora de Salida</b></td>
            <td><b>Acciones</b></td>
        </>
        <?php
        while ($cliente = $consulta->fetchObject()) {
        ?>
            <tr>
                <td><?= $cliente->id ?></td>
                <td><?= $cliente->Cedula ?></td>
                <td><?= $cliente->nombre ?></td>
                <td><?= $cliente->ARL ?></td>
                <td><?= $cliente->RH ?></td>
                <td><?= $cliente->Casilla ?></td>
                <td><?= $cliente->Fecha ?></td>
                <td><?= $cliente->hora ?></td>
                <td><?= $cliente->persona ?></td>
                <td><?= $cliente->Empresa ?></td>
                <td><?= $cliente->lectura ?></td>
                <td><?= $cliente->equipo ?></td>
                <td><?= $cliente->Total ?></td>
                <td><?= $cliente->Marca ?></td>
                <td><?= $cliente->Serie ?></td>
                <td><?= $cliente->salidah ?></td>
                <td>
                    <a href="eliminar.php?id=<?= $cliente->id ?>">🗑️Elminar </a>
                    <a href="actualizar.php?id=<?= $cliente->id ?>">✏️Editar</a>
                    <a href="imprimir.php?id=<?= $cliente->id ?>">🖨️Imprimir</a>
                    

                </td>
            </tr>
        <?php
        }
        ?>
     <tr class='noSearch hide'>
                <td colspan="5"></td>
            </tr>
    </table>
    <center>
    <a href="Index.php"><h5>Volver al inicio</h5></a>
    </center>
    <marquee direction="right">©BY HEALTHY AMERICA S.A.S </marquee>
</body>

</html>
<?php

require_once('conexion.php');




?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEER REGISTROS</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
    <script src="../JS/scriptfrontend.js"></script>
  
</head>
<header class="header">
<ul>
    <li id="seccion1" onmouseover="ver(1)" onmouseout="ocultar(1)">
         <a>USUARIO</a>
         <div id="subseccion1">
            <p><a href="../html/registrar.html"> registrar </a></p>
            <p><a href=""> login </a></p>
        </div>
    </li>
    <li id="seccion2" onmouseover="ver(2)" onmouseout="ocultar(2)">
        <a>FUNCIONES</a>
        <div id="subseccion2">
            <p><a href="../HTML/mru.html"> mru </a></p>
            <p><a href="../HTML/numeromayor.html"> numero mayor </a></p>
            <p><a href="../HTML/juego1.html"> juego </a></p>
            <p><a href="../HTML/arrays.html"> arrays </a></p>
            <p><a href="../HTML/edades.html"> edad </a></p>
        </div>
    </li>
    <li id="seccion3" onmouseover="ver(3)" onmouseout="ocultar(3)">
        <a>NOSOTROS</a>
        <div id="subseccion3">
            <p><a href="">mision</a></p>
            <p><a href="">vision</a></p>
        </div>
    </li>
</ul>
    </header>

<body>
 <section id="contenedor">
<h2>REGISTROS</h2>

  <table border="3" id="tabla">
    <tr>
    <td>NOMBRE</td>
    <td>APELLIDO</td>
    <td>E-MAIL</td>
    <td>IDENTIFICACION</td>

    </tr>
<?php
$sql="select * from estudiante";
$resultado=mysqli_query($conn,$sql);
while($mostrar=mysqli_fetch_array($resultado)){

?>
<tr>
  <td><?php echo $mostrar ['nombre'] ?> </td>
  <td><?php echo $mostrar ['apellido'] ?> </td>
  <td><?php echo $mostrar ['email'] ?> </td>
  <td><?php echo $mostrar ['identificacion'] ?> </td>





</tr>

<?php } ?>


 </table>
 </section>
 
</body>
</html>
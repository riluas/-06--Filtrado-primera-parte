<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $resultado = $conexion->query("SELECT * FROM jugador");
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <nav>
      <a href="index.php">Home</a>
      <a href="equipos.php">Equipos</a>
      <a href="jugadores.php">Jugadores</a>
    </nav>
  </head>
  <body>
    <table>
      <tr>
        <td>Nombre</td>
        <td>apellido</td>
      </tr>
      <?php
        foreach ($resultado as $jugador) {
          echo "<tr>";
          echo "<td>".$jugador['nombre']."</td>";
          echo "<td>".$jugador['apellido']."</td>";
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>

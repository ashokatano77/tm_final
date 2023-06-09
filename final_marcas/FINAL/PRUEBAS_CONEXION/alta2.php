<?php

$host = 'localhost';
$db = 'llmm';
$user = 'inesjoder';
$pass = 'horse';

$conexion = pg_connect("host=$host dbname=$db user=$user password=$pass");
if (!$conexion) {
  echo 'Error en la conexión a la base de datos.';
  exit;
}

$nombre = $_POST['nombre'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO registro (nombre, contrasena) VALUES ('$nombre', '$contrasena')";

$consulta = pg_query($conexion, $query);
if (!$consulta) {
  echo 'Error en la ejecución de la consulta.';
  exit;
}

pg_close($conexion);

echo 'El alumno fue registrado con éxito.';
?>

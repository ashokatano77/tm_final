<?php

$host='localhost';
$bd="llmm"
$user="postgres"
$pass="horse";


$conexion=pg_conect("host=$host dbname=$bd user=$user, password=$pass");
$query=("INSERT INTO registro (nombre,contrsena) VALUES ('$_REQUEST[nombre]','$_REQUEST[contrasena]')");


$consulta=pg_query($conexion,$query);
pg_close;
echo 'El alumno fue registrado con exito';






?>
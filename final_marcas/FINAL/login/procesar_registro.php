<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $creaUsuario = $_POST['creausuario'];
    $creaContrasena = $_POST['creacontrasena'];

    // Obtener los datos existentes del archivo de credenciales (si existe)
    $credenciales = [];
    if (file_exists('credenciales.json')) {
        $credencialesJson = file_get_contents('credenciales.json');
        $credenciales = json_decode($credencialesJson, true);
    }

    // Agregar los nuevos datos al arreglo de credenciales
    $credenciales[$creaUsuario] = $creaContrasena;

    // Guardar los datos actualizados en el archivo de credenciales
    $credencialesJson = json_encode($credenciales);
    file_put_contents('credenciales.json', $credencialesJson);

    // Redirigir al usuario a una página de éxito o mostrar un mensaje de éxito
    header("Location: /FINAL/portada/portada.html");
    exit();
}
?>

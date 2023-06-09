<?php
// Definir las credenciales válidas



$credenciales = [
    '1' => '1',
    'usuario2' => 'contrasena2',
    'usuario3' => 'contrasena3',
    // Agrega más usuarios y contraseñas si es necesario
];

// Obtener los datos enviados desde el formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Verificar las credenciales del usuario
if (isset($credenciales[$usuario])  && $credenciales[$usuario] === $contrasena) {
    // Las credenciales son válidas, redireccionar al usuario a la página de inicio
    header('Location: /FINAL/portada/portada.html');
    exit();
} else {
    // Las credenciales son inválidas, redireccionar a una página de error de inicio de sesión
    header('Location: error.html');
    exit();
}
?>

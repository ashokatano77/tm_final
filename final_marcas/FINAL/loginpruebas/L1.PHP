<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Depuración: Imprimir los valores de las variables
   

    // Verificar las credenciales del usuario
    if ($usuario === 'usuario' && $contrasena === 'contrasena') {
        // Las credenciales son válidas, redireccionar al usuario a la página de inicio
        header('Location: /FINAL/loginpruebas/pagina_inicio.html');
        exit();
    } else {
        // Las credenciales son inválidas, redireccionar a una página de error de inicio de sesión
        header('Location: /FINAL/loginpruebas/er.html');
        exit();
    }
}
?>

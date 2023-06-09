<?php
if (isset($_POST['submit'])) {
    $categoria = $_POST['categoria'];

    // Realiza las acciones necesarias con la categoría seleccionada
    // Por ejemplo, puedes consultar una base de datos o filtrar una lista de productos
    // y mostrar solo los productos de la categoría seleccionada

    if ($categoria === 'Manzana') {
        echo "<h2>Manzanas</h2>";
        echo "<ul>";
        echo "<li>Manzana roja</li>";
        echo "<li>Manzana verde</li>";
        echo "<li>Manzana amarilla</li>";
        echo "</ul>";
    } elseif ($categoria === 'Platano') {
        echo "<h2>Plátanos</h2>";
        echo "<ul>";
        echo "<li>Plátano amarillo</li>";
        echo "<li>Plátano verde</li>";
        echo "<li>Plátano maduro</li>";
        echo "</ul>";
    } else {
        echo "<p>No se encontraron productos para la categoría seleccionada.</p>";
    }
}
?>

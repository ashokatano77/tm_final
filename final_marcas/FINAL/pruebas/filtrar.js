// Obtener el valor seleccionado del menú desplegable de categorías
var categoriaSeleccionada = document.getElementById("tipo").value;

// Obtener una lista de todos los elementos <li> que contienen los productos
var productos = document.getElementsByTagName("li");

// Recorrer todos los productos y ocultar los que no corresponden a la categoría seleccionada
for (var i = 0; i < productos.length; i++) {
  var categoriaProducto = productos[i].getAttribute("data-categoria");
  if (categoriaSeleccionada === "" || categoriaSeleccionada === categoriaProducto) {
    productos[i].style.display = "block";
  } else {
    productos[i].style.display = "none";
  }
}
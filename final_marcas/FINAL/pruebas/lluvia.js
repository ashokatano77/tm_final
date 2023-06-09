var rainContainer = document.getElementById("rain");

// Cantidad de gotitas de lluvia
var numDrops = 50;

for (var i = 0; i < numDrops; i++) {
  var drop = document.createElement("div");
  drop.classList.add("drop");
  drop.style.left = Math.random() * 100 + "%";
  drop.style.animationDelay = Math.random() + "s";
  rainContainer.appendChild(drop);
}

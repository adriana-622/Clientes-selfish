var mostrar = document.getElementById("mostrar");
var buscador = document.getElementById("buscador");

mostrar.addEventListener("click", function() {
  if (buscador.style.display === "none") {
    buscador.style.display = "block";
  } else {
    buscador.style.display = "none";
  }
});
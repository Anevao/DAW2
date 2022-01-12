let navegador = prompt("Introduce un navegador", "").toLowerCase;
if ((navegador = "edge")) {
  alert("¡Tienes Edge!");
} else if (navegador == "chrome" || "firefox" || "safari" || "opera") {
  alert("Esta bien, soportamos estos navegadores también");
} else {
  alert("¡Esperamos que esta página se vea bien!");
}

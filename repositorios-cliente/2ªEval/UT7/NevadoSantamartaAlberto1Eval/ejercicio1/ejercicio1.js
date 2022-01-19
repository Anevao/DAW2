let primerElemento = document.getElementsByTagName("ul")[0];
let hache = document.createElement("h3");
hache.innerHTML = "Primer arbol";
hache.style.backgroundColor = "green";
hache.style.fontSize = "2em";
hache.style.textAlign = "center";
primerElemento.before(hache);

let botonBorrar = document.getElementById("botonBorrar");
botonBorrar.onclick = function () {
  let textoHoja = prompt("que hoja quiere borrar?");
  let hojas = document.querySelectorAll(".hoja");
  for (let hoja of hojas) {
    if (hoja.innerHTML == textoHoja) {
      hoja.remove();
      alert("hoja borrada con exito");
      return;
    }
  }
  alert("no se ha encontrado ninguna hoja");
};

let botonInsertar = document.getElementById("botonInsertar");
botonInsertar.onclick = function () {
  let li = document.createElement("li");
  li.className = "hoja";
  let textoRama = prompt("en que rama quieres insertar la hoja?");
  let ramas = document.querySelectorAll("li.rama");
  let cont = 0;
  for (let rama of ramas) {
    if (rama.firstChild.data.trim() == textoRama) {
      let respuesta = Number(
        prompt("Elige primera o ultima hoja: \n1. primera \n2. ultima \n")
      );
      switch (respuesta) {
        case 1:
          li.innerHTML = prompt("inserta texto para la hoja");
          ramas[cont].after(li);
          return;
          break;
        case 2:
          li.innerHTML = prompt("inserta texto para la hoja");
          ramas[cont + 1].before(li);
          return;
          break;
        default:
          alert("Introduzca un valor válido la próxima vez");
      }
    }
    cont++;
  }
  alert("no se ha encontrado ninguna rama con ese nombre");
};

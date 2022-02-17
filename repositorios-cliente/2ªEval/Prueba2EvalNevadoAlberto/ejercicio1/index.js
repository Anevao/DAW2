class objetoModulo {
  constructor(codigo, descripcion, curso, codigoCiclo, horas) {
    this.codigo = codigo;
    this.descripcion = descripcion;
    this.curso = curso;
    this.codigoCiclo = codigoCiclo;
    this.horas = horas;
  }
}
let arrayModulos = [];
//carga el script despues de cargar el dom
document.addEventListener("DOMContentLoaded", iniciar);

function iniciar() {
  let formulario = document.forms[0];
  let tabla = document.getElementById("tabla");
  //declaro botones e inicializo eventos de estos
  let botonGrabar = document.getElementById("grabarModulo");
  let botonGuardar = document.getElementById("guardarModulo");
  //botonGrabar.addEventListener("click", funcGrabar);
  //botonGuardar.addEventListener("click", funcGuardar);
  botonGrabar.onclick = function (evento) {
    let cCodigo = formulario.elements.codigo;
    let cCodigoCiclo = formulario.elements.codigoCiclo;
    let cDescripcion = formulario.elements.descripcion;
    let cCurso = formulario.elements.curso;
    let cHoras = formulario.elements.horas;
    evento.preventDefault();
    if (
      validador(cCodigo, "codigoErr", /^[A-Za-z1-9]{4}$/) &&
      validador(cDescripcion, "descripcionErr", /^[A-Z\s]+$/i) &&
      validador(cCurso, "cursoErr", /^[1-2]$/) &&
      validador(cCodigoCiclo, "codigoCicloErr", /^[A-Za-z1-9]{4}$/) &&
      validador(cHoras, "horasErr", /^[^0][0-9]+$/)
    ) {
      let modulo = new objetoModulo(
        cCodigo.value,
        cDescripcion.value,
        cCurso.value,
        cCodigoCiclo.value,
        cHoras.value
      );
      /*let modulo = new Object{
        "codigo" : cCodigo.value,
        "descripcion": cDescripcion.value,
        "curso": cCurso.value,
        "codigoCiclo": cCodigoCiclo.value,
        "horas":cHoras.value
      };*/
      arrayModulos.push(modulo);

      let fila = document.createElement("tr");
      let celdaCodigo = document.createElement("td");
      celdaCodigo.textContent = cCodigo.value;
      let celdaDescripcion = document.createElement("td");
      celdaDescripcion.textContent = cDescripcion.value;
      let celdaCurso = document.createElement("td");
      celdaCurso.textContent = cCurso.value;
      let celdaCodigoCiclo = document.createElement("td");
      celdaCodigoCiclo.textContent = cCodigoCiclo.value;
      let celdaHoras = document.createElement("td");
      celdaHoras.textContent = cHoras.value;
      fila.append(
        celdaCodigo,
        celdaDescripcion,
        celdaCurso,
        celdaCodigoCiclo,
        celdaHoras
      );
      tabla.append(fila);
    }
  };

  function validador(elemento, campo, expReg) {
    if (elemento.value) {
      if (!expReg.test(elemento.value)) {
        mostrarError(
          elemento,
          campo,
          "Introduzca una formato válido, por favor"
        );
        return false;
      } else {
        //si llega aqui es que lo ha hecho bien y si hubiese un error lo quita
        quitarError(elemento, campo);
        //alert(campo + "correcto");
        return true;
      }
    } else {
      mostrarError(elemento, campo, "Campo obligatorio");
      return false;
    }
  }

  function mostrarError(campo, campoError, mensaje) {
    let error = document.getElementById(campoError);

    error.textContent = mensaje;

    campo.classList.add("rojo");
  }
  function quitarError(campo, campoError) {
    let error = document.getElementById(campoError);
    error.textContent = "";
    campo.classList.remove("rojo");
  }
}

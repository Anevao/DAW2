//numero mayor menor o igual a 0
let comp = +prompt("Introduce un numero", ""); //con ese + antes del prompt te intenta pasar el string a num
if (comp > 0) {
  alert("1");
} else if (comp < 0) {
  alert("-1");
} else if (comp == 0) {
  alert("0");
} else {
  alert("no es un numero melon");
}
//pregunta nombre de javascript
let comp = prompt("¿cual es el nombre de javascript?", "ECMAScript");
if (comp == "ECMAScript") {
  alert("correcto");
} else {
  alert("incorrecto");
}
//uso del ternario
a = 3;
b = 2;
let result = a + b < 4 ? "Debajo" : "Encima";
alert(result);
//ternario multiple
let login = prompt("Introduce tu usuario", ""); //manera de que no diferencie entre mayus y minus tolowercase
let message =
  login.toLocaleLowerCase == "empleado"
    ? "Hola"
    : login.toLowerCase == "director"
    ? "Felicidades"
    : login.toLowerCase == ""
    ? "Sin sesión"
    : "";
alert(message);
//let message = (login == 'Empleado') ? 'Hola' :
//  (login == 'Director') ? 'Felicidades' :
//  (login == '') ? 'Sin sesión' :
//   '';

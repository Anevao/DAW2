//CREAR FUNCION QUE PONGA LA PRIMERA LETRA EN MAYUSCULAS DE UN STRING
//OJO PQ SI EL STRING ESTA VACIO SERA UNDEFINED Y NOS SALTARA EL ERROR
function ucFirst(nombre) {
  if (!nombre) return nombre;

  return nombre[0].toUpperCase() + nombre.slice(1);
}

//BUSCADOR DE SPAM, CONTROLAR Q UN STRING NO CONTENGA LA PALABRA VIAGRA O XXX, MAYUS O MINUS DA=
function checkSpam(spam) {
  let spam1 = spam.toUpperCase();
  return spam1.includes("VIAGRA") || spam1.includes("XXX");
}

// Crea una función truncate(str, maxlength) que verifique la longitud de str
//  y, si excede maxlength – reemplaza el final de str con el carácter de puntos
//  suspensivos "…", para hacer su longitud igual a maxlength.
//slice no modifica el string
function truncate(str, maxlength) {
  return str.length > maxlength ? str.slice(0, maxlength - 1) + "…" : str;
}

//Tenemos un costo en forma de “$120”. Es decir: el signo de dólar va primero y luego el número.
// Crea una función extractCurrencyValue(str) que extraiga el valor numérico de
// dicho string y lo devuelva.
function extractCurrencyValue(str) {
  return +str.slice(1);
}
let dinero = "$120";
document.write(extractCurrencyValue(dinero));

//trabajar sobre las funciones de los enunciados
let str = prompt("Introduce un nombre" + "");
document.write(ucFirst(truncate(str, 20)));
if (checkSpam(str))
  alert(
    "Atencion el nombre introducido contiene palabras consideradas como spam"
  );

//de uno en uno mas facilito y ordenado
//1 document.write(ucFirst(str));
//2 checkSpam(str);
//3 document.write(truncate(str));

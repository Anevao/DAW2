alert(acortar("la-madre-que-me-pario"));
function acortar(str) {
  str.split("-"); //ahora es array separado en palabras
  str.map(mayusLa1);
  str.join("");
  return str;
}
function mayusLa1(palabra) {
  palabra.split(""); //separa la palabra en array de letras
  palabra[0].toUppercase; //primera posicion a mayus
  palabra.join(""); //junta todo otra vez
  return palabra;
}
function camelize(str) {
  let nuevoStr = "";
  let arr = str.split("-");
  arr.forEach(cadena, i);
  {
    if (i > 0) {
      cadena = cadena[0].toUppercase() + cadena.slice(1);
    }
    nuevoStr += cadena;
  }
}

/*
function camelize(str) {
    return str
      .split('-') // separa 'my-long-word' en el array ['my', 'long', 'word']
      .map(
        // convierte en mayúscula todas las primeras letras de los elementos del array excepto por el primero
        // convierte ['my', 'long', 'word'] en ['my', 'Long', 'Word']
        (word, index) => index == 0 ? word : word[0].toUpperCase() + word.slice(1)
      )
      .join(''); // une ['my', 'Long', 'Word'] en 'myLongWord'
  }*/

//filtro de array

function filterRange(arr, a, b) {
  //return arr.filter(item => (a <= item && item <= b));
  arr.filter(function (item) {
    if (a <= item && item <= b) return true;
    else return false;
  });
}
let newArray = filterRange([5, 3, 8, 1], 1, 4);

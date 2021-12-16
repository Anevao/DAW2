//introducir un numero e indicar cuantos los numeros primos desde 2 hasta el numero
let n = prompt('Introduce un numero mayor que 2', '');

nextPrime:
for (let i = 2; i <= n; i++) { // por cada i...

  for (let j = 2; j < i; j++) { // buscar un divisor..
    if (i % j == 0) continue nextPrime; // no es primo, ir al próximo i
  }

  alert( i ); // primo
}
//Introduce un numero mayor k 100 para cuando dejes en blanco o canceles (num=false)
let num;

do {
  num = prompt("Ingresa un número mayor a 100", 0);
} while (num <= 100 && num);
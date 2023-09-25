let calificaciones = [100,85,45,76];
let arregloDiferentesTipos = ['Hola',10,true,[1,2,3],function getNombre(){return 'Misael'}];

let arregloNumeros = new Array(5);
let arregloLetras = new Array('a','b','c');

console.log('Calificaciones', calificaciones);
console.log('arreglo de diferentes tipos',arregloDiferentesTipos);
console.log('arreglo numeros', arregloNumeros);
console.log('arreglo letras', arregloLetras);

calificaciones.push(90);
calificaciones.unshift(0);
calificaciones.pop();
calificaciones.shift();

let arregloLetrasCopia = arregloLetras.slice();
let arregloLetrasCopia2 = [...arregloLetras];


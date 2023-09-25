function despedir(nombre) {
    return `Adios ${nombre}`;
}

console.log(despedir('Misael'));

let functionAlmacenada = function saludar(nombre) {
    return `Hola ${nombre}`;
}

console.log(functionAlmacenada('Rodrigo'));

let funcionAnonimaAlmacenada = function (nombre) {
    return `Hola ${nombre}`;
}

console.log(funcionAnonimaAlmacenada('Andrea'));
console.log(function () {return "Ejecucion"}());

function obtenerPotencia(base,exponente = 2) {
    return base ** exponente;
}

console.log(obtenerPotencia(2));
console.log(obtenerPotencia(2,3));

let funcionFlecha = nombre => `Hola ${nombre}`;

console.log(funcionFlecha('Said'));
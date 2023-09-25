const obtenerNombre = nombre => nombre;

const saludar = (nombre) => {
    return `Hola ${nombre}`;
}

console.log(saludar(obtenerNombre('Misael')));

const calificaciones = [100,88,75,74,68,85];

calificaciones.forEach((valor,index,arr) => {
    console.log(`Valor ${valor}, Index ${index}, Arr ${arr}`);
});

console.log(calificaciones.filter(calificaciones => calificaciones < 70));
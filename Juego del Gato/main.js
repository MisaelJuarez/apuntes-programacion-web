const $contenedor = document.getElementById('container');
const $celdas = document.querySelectorAll('.celda');

let signoJugador = 'X ';
let cambioSigno = true;

let matriz = [['','',''],
              ['','',''],
              ['','','']];      

let $arrayCeldas = Array.from($celdas); 

const compararSiGano = (array,jugador) => {
    let contador = 0;
    for (let i = 0; i < array.length; i++) {
        if (array[i] == jugador) contador++;
    }
    return (contador == 3) ? true : false;
}

const turnoDelJugador = () => {
    if(cambioSigno){
        signoJugador = 'X';
        cambioSigno = false;
    } else {
        signoJugador = 'O';
        cambioSigno = true;
    }
}

const logicaDelJuego = (fila,celda) => {
    for (let i = 0; i < matriz.length; i++) {
        if (fila == `celda celda-row-${i+1}`) {
            for (let j = 0; j < $arrayCeldas.length; j++) {
                if (celda == `r${i+1}-${j+1}`) {
                    matriz[i][j] = signoJugador;
                    if (compararSiGano(matriz[i],signoJugador) || 
                        compararSiGano([matriz[0][j],matriz[1][j],matriz[2][j]],signoJugador) || 
                        compararSiGano([matriz[0][0],matriz[1][1],matriz[2][2]],signoJugador) || 
                        compararSiGano([matriz[0][2],matriz[1][1],matriz[2][0]],signoJugador)) {
                        alert(`Gano ${signoJugador}`);
                    }
                }
            }
        }
    }
}

const llenarCelda = (celda) => {
    let p = document.createElement('p');
    p.textContent = signoJugador;
    celda.appendChild(p);
}

$contenedor.addEventListener('click', (e) => {
    turnoDelJugador();
    logicaDelJuego(e.target.className,e.target.id);
    llenarCelda(document.getElementById(`${e.target.id}`));
});
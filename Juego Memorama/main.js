const $cartasMemorama = document.querySelector('.cartasMemorama');
const $cartas = document.querySelectorAll('.carta');
const $mostrarResultado = document.querySelector('.juego-terminado');
const $intentos = document.getElementById('intentos');
const $reiniciarJuego = document.getElementById('reiniciar-juego');

const imagenes = ['./img/superman1.JPG','./img/batman1.jpg','./img/flash1.png','./img/wonderWoman1.png','./img/aquaman1.jpg',
                  './img/superman1.JPG','./img/batman1.jpg','./img/flash1.png','./img/wonderWoman1.png','./img/aquaman1.jpg',
                  './img/greenlantern.jpg','./img/green_arrow.jpg','./img/shazam.jpg','./img/halcon.jpg','./img/dr_fate.jpg',
                  './img/greenlantern.jpg','./img/green_arrow.jpg','./img/shazam.jpg','./img/halcon.jpg','./img/dr_fate.jpg'];
const personasje = ['Superman','Batman','Flash','WonderWoman','Aquaman','Superman','Batman','Flash','WonderWoman','Aquaman',
                    'green-lanter','green-arrow','shazam','halcon','dr-fate','green-lanter','green-arrow','shazam','halcon','dr-fate'];
const cartasSeleccionadas = []; 

let intentos = 0;

window.addEventListener('load',() => {
    const posiciones = [];
    let posicionesVacias = true;

    while (posicionesVacias) {
        let posicionAleatoria = Math.floor(Math.random() * 20) + 0;
        if (!posiciones.includes(posicionAleatoria)) posiciones.push(posicionAleatoria);
        if (posiciones.length == 20) posicionesVacias = false;
    }

    for (let i = 0; i < $cartas.length; i++) {
        const img = document.createElement('img');
        const ocultar = document.createElement('div');
        img.setAttribute('src',imagenes[posiciones[i]]);
        img.setAttribute('alt',personasje[posiciones[i]]);
        ocultar.setAttribute('class',`atras ${personasje[posiciones[i]]}`);
        ocultar.setAttribute('id',`${i+1}`);
        $cartas[i].appendChild(img);
        $cartas[i].appendChild(ocultar);
    }
});

let idCarta = ''; 

$cartasMemorama.addEventListener('click',(e) => {
    if(e.target.matches('.atras')){
        e.target.style.opacity = '0';
        e.target.style.transition = '0.2s all ease-in';
        cartasSeleccionadas.push(e.target);
    }    
    if (cartasSeleccionadas.length == 2) {
        if (cartasSeleccionadas[0].id == cartasSeleccionadas[1].id) {
            cartasSeleccionadas.pop();
        } else {
            intentos++;
            if (cartasSeleccionadas[0].className == cartasSeleccionadas[1].className) {
                cartasSeleccionadas[0].classList.add('encontrado');
                cartasSeleccionadas[1].classList.add('encontrado');
                cartasSeleccionadas[0].classList.remove('atras');
                cartasSeleccionadas[1].classList.remove('atras');
                cartasSeleccionadas.length = 0;
            } else {
                setTimeout(() => {
                    cartasSeleccionadas[0].style.opacity = '1';
                    cartasSeleccionadas[1].style.opacity = '1';
                    cartasSeleccionadas.length = 0;
                },500);
            }
        }
    }

    if(document.querySelectorAll('.encontrado').length == 20){
        $intentos.textContent = intentos;
        $mostrarResultado.removeAttribute('hidden');
        document.querySelector('h1').setAttribute('hidden','true');
    }
});

$reiniciarJuego.addEventListener('click',() => document.location.reload());
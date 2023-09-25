Las siglas **DOM** significan **Document Object Model**, o lo que es lo mismo, la estructura del documento HTML. Una página HTML está formada por múltiples etiquetas HTML, anidadas una dentro de otra, formando un árbol de etiquetas relacionadas entre sí, que se denomina **árbol DOM**

![[Pasted image 20230925112945.png]]

En Javascript, cuando nos referimos al **DOM** nos referimos a esta estructura de árbol, mediante la cuál podemos acceder a ella y modificar los elementos del HTML desde Javascript, añadiendo nuevas etiquetas, modificando o eliminando otras, cambiando sus atributos HTML, añadiendo clases, cambiando el contenido de texto, etc.

En Javascript, la forma de acceder al DOM es a través de un objeto llamado `document`, que representa el árbol DOM de la página o, más concretamente, la página de la pestaña del navegador donde nos encontramos. En su interior pueden existir varios tipos de elementos, pero principalmente serán element o  node:

- element: no es más que la representación genérica de una etiqueta: `HTMLElement`.
- node: es una unidad más básica, la cuál puede ser  o un **nodo de texto**.

**Funciones para modificar el DOM

```javascript
//obtenemos la etiqueta con su id
document.getElementById('id_etiqueta');

//obtenemos la etiqueta ya sea por su id o clase
document.querySelector('.etiqueta-clase'); //clase
document.querySelector('#etiqueta-id'); //id

//agrega contenido 
document.querySelector('.etiqueta-clase').textContent = 'Texto con textContent';
//otra forma de agregar contenido
document.querySelector('#etiqueta-id').innerHTML = 'Texto con innerHTML';

// El metodo toggle es como una palanca, si tiene la clase se la agrega si no se la quita
document.getElementById('id_etiqueta').classList.toggle("clase-css");

//darle a una etiqueta propiedades de css
document.getElementById('id_etiqueta').style.textAlign = 'center';
//otra forma de darle propiedades aun etiqueta valores de css
document.getElementById('id_etiqueta').style.setProperty('width','50%');

//agregarle atributos a una etiqueta
document.getElementById('id_etiqueta').setAttribute('class','clase-js');

//creamos una etiqueta y la guardamos en una variable
let $div = document.createElement('vid');
let $img = document.createElement('img');

//agregar una etiqueta otra etiqueta
$div.appendChild($img);

//darle evento a una etiqueta html
$img.addEventListener('click', () => {
	alert('Hiciste click en la imagen');
});
```

**Contra parte con jquery

```javascript
//obtener una etiqueta por su id
$('#id').val();

//obtener una etiqueta por su clase
$('.id').val();

//agregar contenido a una etiqueta
$('#etiquetaP').text('Agregando contenido con text');
//otra forma de agregar contenido
$('#etiquetaP').html('Agregando contenido con html');

// El metodo toggle es como una palanca, si tiene la clase se la agrega si no se la quita
$('.elemento').toggle();

//agregar propiedades css a una etiqueta
$('.elemento').css('color','blue');

//agregarle atributos a una etiqueta 
$('.elemento').attr('target','_blank');

//creamos una etiqueta y la guardamos en una variable
let $div = $('<div></div>');
let $img = $('<img></img>');

//agregar a una etiqueta otra etiqueta
$div.append($img);

//agregarle a una etiqueta el evento click
$('.btn').click(funtion() {
	alert("¡Se hizo clic en el botón!");				
});
```

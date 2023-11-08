let  loadMoreBtn = document.querySelector('#load-more');
let currentItem = 8;

loadMoreBtn.onclick = () => {
    let boxes = [...document.querySelectorAll('.box-container .box')];
    for (var i = currentItem; i < currentItem + 4; i++) {
        boxes[i].style.display = 'inline-block'
    }
    currentItem += 4;
    if(currentItem >= boxes.length) {
        loadMoreBtn.style.display = 'none'
    }
}

//carrito

const carrito = document.getElementById('carrito');
const elementos1 = document.getElementById('lista-1');
const lista = document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn = document.getElementById('vaciar-carrito');

cargarEventListeners();

function cargarEventListeners() {
    elementos1.addEventListener('click', comprarElemento);
    carrito.addEventListener('click', eliminarElemento);
    vaciarCarritoBtn.addEventListener('click', vaciarCarrito);
}

function comprarElemento(e) {
    e.preventDefault();
    if (e.target.classList.contains('agregar-carrito')) {
        const elemento = e.target.parentElement.parentElement;
        leerDatosElemento(elemento);
    }
}

function leerDatosElemento(elemento) {
    const imagen = elemento.querySelector('img').getAttribute('src');
    const titulo = elemento.querySelector('h3').textContent;
    const precio = elemento.querySelector('.precio').textContent;
    const id = elemento.querySelector('.agregar-carrito').getAttribute('data-id');
    const infoElemento = { imagen, titulo, precio, id };
    insertarCarrito(infoElemento);
}


function insertarCarrito(elemento) {
    const row = document.createElement('tr');
    row.innerHTML = `
    <td>
        <img src="${elemento.imagen}" width=100 height=150px >
    </td>
    
    <td>
        ${elemento.titulo}
    </td>
    
    <td>
        ${elemento.precio}
    </td>
    
    <td>
        <a herf="a" class="borrar" data-id="${elemento.id}">X</a>
    </td>
    `;

    lista.appendChild(row);
    actualizarContadorCarrito();
    
}

function eliminarElemento(e) {
    e.preventDefault();
    let elemento,
        elementoId;

    if(e.target.classList.contains('borrar')) {
        e.target.parentElement.parentElement.remove();
        elemento = e.target.parentElement.parentElement;
        elementoId = elemento.querySelector('a').getAttribute('data-id');
        actualizarContadorCarrito();

    }
}

function vaciarCarrito() {
    while(lista.firstChild) {
        lista.removeChild(lista.firstChild);
        actualizarContadorCarrito();
    }
    return false;
}


function actualizarContadorCarrito() {
    const elementosCarrito = lista.querySelectorAll('tr').length; 
    const carritoContador = document.getElementById('carrito-contador');
    carritoContador.textContent = elementosCarrito; 
}
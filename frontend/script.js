let  loadMoreBtn = document.querySelector('#load-more');
let currentItem = 8;
let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];



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

    // Cargar elementos del carrito desde localStorage al elegir otra opcion en el menu
    document.addEventListener('DOMContentLoaded', () => {
        const carritoGuardado = JSON.parse(localStorage.getItem('carrito')) || [];
        carritoGuardado.forEach(elemento => insertarCarrito(elemento));
        actualizarContadorCarrito();
    });
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
    guardarCarritoEnLocalStorage();
    
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
    guardarCarritoEnLocalStorage();

}



function actualizarLocalStorage() {
    // Actualizar el localStorage con los pedidos
    localStorage.setItem('pedidos', JSON.stringify(pedidos));
}

function Crear() {
    Swal.fire({
        title: '¿Deseas confirmar orden?',
        text: 'Una vez confirmado, se agregará a la lista de pedidos',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirmar',
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Orden concluida exitosamente',
                text: 'Ha sido añadida a la lista de pedidos',
                icon: 'success',
            });

      
            const elementosCarrito = lista.querySelectorAll('tr');
            elementosCarrito.forEach((elementoCarrito) => {
                const titulo = elementoCarrito.querySelector('td:nth-child(2)').textContent;
                const precio = elementoCarrito.querySelector('td:nth-child(3)').textContent;
                
                const elementoPedido = {
                    titulo,
                    precio,
                };

                pedidos.push(elementoPedido);
            });


            vaciarCarrito();

            actualizarLocalStorage();

            actualizarContadorCarrito();
        }
    });
}


function actualizarLocalStorage() {
    localStorage.setItem('pedidos', JSON.stringify(pedidos));
}




function vaciarCarrito() {
    while(lista.firstChild) {
        lista.removeChild(lista.firstChild);
        actualizarContadorCarrito();
    }
    guardarCarritoEnLocalStorage();
    return false;
}


function actualizarContadorCarrito() {
    const elementosCarrito = lista.querySelectorAll('tr').length; 
    const carritoContador = document.getElementById('carrito-contador');
    carritoContador.textContent = elementosCarrito; 
}

//Local storage
function guardarCarritoEnLocalStorage() {
    const elementosCarrito = [];
    lista.querySelectorAll('tr').forEach(row => {
        const imagen = row.querySelector('img').getAttribute('src');
        const titulo = row.querySelector('td:nth-child(2)').textContent;
        const precio = row.querySelector('td:nth-child(3)').textContent;
        const id = row.querySelector('.borrar').getAttribute('data-id');
        elementosCarrito.push({ imagen, titulo, precio, id });
    });

    localStorage.setItem('carrito', JSON.stringify(elementosCarrito));
}



//Pedidos
document.addEventListener('DOMContentLoaded', () => {
    const verPedidosBtn = document.getElementById('ver-pedidos');
    verPedidosBtn.addEventListener('click', verPedidos);
});



function verPedidos() {
    if (pedidos.length === 0) {
        Swal.fire({
            icon: 'info',
            title: 'No hay pedidos',
            text: 'Aún no has creado ningún pedido.',
        });
    } else {
        Swal.fire({
            title: 'Pedidos',
            html: generarListaPedidos(),
            showCloseButton: true,
            showCancelButton: false,
            focusConfirm: false,
        });
    }
}

function generarListaPedidos() {
    let listaHTML = '<ul>';
    pedidos.forEach((pedido, index) => {
        listaHTML += `<li>${pedido.titulo} - ${pedido.precio} <button class="eliminar-pedido" data-index="${index}">Eliminar</button></li>`;
    });
    listaHTML += '</ul>';
    return listaHTML;
}

function eliminarPedido(index) {
    pedidos.splice(index, 1);
    actualizarLocalStorage();
}

document.addEventListener('click', (e) => {
    if (e.target.classList.contains('eliminar-pedido')) {
        const index = e.target.getAttribute('data-index');
        eliminarPedido(index);
        verPedidos();
    }
});

function actualizarLocalStorage() {
    localStorage.setItem('pedidos', JSON.stringify(pedidos));
}

function cargarPedidosDesdeLocalStorage() {
    const pedidosGuardados = localStorage.getItem('pedidos');
    if (pedidosGuardados) {
        pedidos = JSON.parse(pedidosGuardados);
    }
}


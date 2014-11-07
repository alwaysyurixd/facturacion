icremento =0;
function crear(obj) {
    icremento++;
    field = document.getElementById('field');
    contenedor = document.createElement('div');
    contenedor.id = 'div'+icremento;
    field.appendChild(contenedor);
    boton = document.createElement('input');
    boton.type = 'text';
    boton.className = 'concepto';
    boton.name = 'text'+'[ ]';
    contenedor.appendChild(boton);
}
function borrar(obj) {
    field = document.getElementById('field');
    field.removeChild(document.getElementById(obj));
}
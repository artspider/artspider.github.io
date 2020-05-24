function agregarElemento(etiqueta, texto) {
    const el = document.createElement(etiqueta);
    el.innerHTML = texto;
    let lista = document.getElementById('lista');
    lista.appendChild(el);
    return el;
}
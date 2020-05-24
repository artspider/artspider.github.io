var now = new Date()
var days = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado']
var months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',
  'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
var day = days[now.getDay()]
var month = months[now.getMonth()]
var dayNumber = now.getDate()

var botonAdd = document.getElementById('addButton')
var taskInput = document.querySelector('#inputTask')
var h1 = document.querySelector('#topText')
h1.innerText = `${day}, ${dayNumber} ${month}`

botonAdd.addEventListener('click', function () {
  agregarElemento('li', taskInput.value)
})

/**
 * Agrega un elemento 'li' a una lista desordenada de tareas
 * @param {Text} etiqueta una etiqueta HTML
 * @param {Text} texto el contenido del elemento HTML
 */
function agregarElemento (etiqueta, texto) {
  if (texto === '') {
    return
  }

  const el = document.createElement(etiqueta)
  const item =
        `<p> ${texto} </p>` +
        '<div class="botones">' +
        '<button class="done" onclick="pDone(event)">-</button>' +
        '<button class="remove" onclick="pRemove(event)"></button>' +
        '</div>'
  el.innerHTML = item
  el.classList.add('item')
  const lista = document.getElementById('lista')
  lista.appendChild(el)
  taskInput.value = ''
  return el
}

/**
 * Subraya una tarea ya terminada
 * @param {Element} event el elemento que ejecuto el evento
 */
function pDone (event) {
  const parrafo = event.target.parentNode.parentNode.firstChild
  parrafo.classList.toggle('pDone')
  return parrafo
}

/**
 * Elimina una tarea
 * @param {Element} event el elemento que ejecuto el evento
 */
function pRemove (event) {
  const lista = document.getElementById('lista')
  const elem = event.target
  lista.removeChild(elem.parentNode.parentNode)
  return elem
}

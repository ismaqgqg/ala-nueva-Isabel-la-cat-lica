let diapositivaActual = 0;
const interval = 5000; // 5 segundos
const diapositivas = document.querySelectorAll('.item-carrusel');

function cambiarDiapositiva(direccion) {
    // Remover la clase activa de la diapositiva actual
    diapositivas[diapositivaActual].classList.remove('activo');
    
    diapositivaActual = (diapositivaActual + direccion + diapositivas.length) % diapositivas.length;
    
    // Agregar la clase activa a la nueva diapositiva
    diapositivas[diapositivaActual].classList.add('activo');
    
    actualizarCarrusel();
}

function actualizarCarrusel() {
    const desplazamiento = -diapositivaActual * 100;
    document.querySelector('.contenido-carrusel').style.transform = `translateX(${desplazamiento}%)`;
}

// Rotar automáticamente
setInterval(() => {
    cambiarDiapositiva(1);
}, interval);

// Inicializa la primera diapositiva como activa
diapositivas[diapositivaActual].classList.add('activo');

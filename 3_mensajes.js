function mostrarImagen(src, elemento) {
    const imagen = elemento.querySelector('.imagen-oculta');
    imagen.src = src; // Establece la fuente de la imagen
    imagen.style.transform = 'translate(-50%, -50%) translateX(0)'; // Mueve la imagen a la vista
    imagen.style.opacity = '1'; // Muestra la imagen
}

function ocultarImagen(elemento) {
    const imagen = elemento.querySelector('.imagen-oculta');
    imagen.style.transform = 'translate(-50%, -50%) translateX(-200%)'; // Mueve la imagen fuera de la vista
    imagen.style.opacity = '0'; // Oculta la imagen
}

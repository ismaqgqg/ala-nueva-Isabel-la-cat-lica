// Selecciona todos los botones "Ver más" y añade un evento click
document.querySelectorAll('.btn-vermas01').forEach(button => {
    button.addEventListener('click', (event) => {
        // Obtiene el número de tarjeta desde el botón presionado
        const tarjetaNumero = event.target.dataset.tarjeta;

        // Cambia el contenido de la pestaña emergente según la tarjeta
        document.querySelector('.contenido-emergente02 p').textContent = `Contenido adicional sobre la tarjeta ${tarjetaNumero}.`;

        // Muestra la pestaña emergente
        document.querySelector('.pestaña-emergente02').style.display = 'flex';
    });
});

// Añade un evento click al botón de cerrar
document.querySelector('.btn-cerrar02').addEventListener('click', () => {
    document.querySelector('.pestaña-emergente02').style.display = 'none';
});

// Cierra la pestaña emergente si se hace clic fuera del contenido emergente
document.querySelector('.pestaña-emergente02').addEventListener('click', (event) => {
    if (!event.target.closest('.contenido-emergente02')) {
        document.querySelector('.pestaña-emergente02').style.display = 'none';
    }
});
s
// Efecto de escribir en el texto animado
document.addEventListener("DOMContentLoaded", function() {
    const animatedText = document.querySelector('.animated-text p');
    const text = animatedText.textContent;
    animatedText.textContent = '';
    let index = 0;

    function type() {
        if (index < text.length) {
            animatedText.textContent += text.charAt(index);
            index++;
            setTimeout(type, 50); // Velocidad de escritura
        }
    }

    type();
});


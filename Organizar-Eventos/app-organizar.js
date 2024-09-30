document.addEventListener('DOMContentLoaded', function() {
    // trae botones
    const siguienteBtn = document.getElementById('siguiente-btn');
    const form = document.getElementById('salon-form');

    // Función para manejar el clic en el botón "Siguiente"
    siguienteBtn.addEventListener('click', function(event) {
        
        // agarrar botones
        const radios = form.querySelectorAll('input[type="radio"]');
        // Verifica si alguno está seleccionado
        const isAnyRadioChecked = Array.from(radios).some(radio => radio.checked);

        // si no se selecciono nada alerta
        if (!isAnyRadioChecked) {
            alert('Debes seleccionar un salón antes de continuar.');
        } else {
            // redirige a catering
            window.location.href = 'organizar-catering.php';
        }
    });
});


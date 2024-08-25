document.addEventListener('DOMContentLoaded', function () {
    const toggles = document.querySelectorAll('.list-group-item[data-bs-toggle="collapse"]');

    toggles.forEach(toggle => {
        toggle.addEventListener('click', function () {
            const submenu = document.querySelector(this.dataset.bsTarget);
            
            if (submenu.style.display === 'block') {
                // Animación de colapso
                submenu.style.height = submenu.scrollHeight + 'px'; // Fija la altura actual
                submenu.offsetHeight; // Forzar el reflow
                submenu.style.transition = 'height 0.3s ease'; // Transición suave
                submenu.style.height = 0; // Colapsar a altura 0

                submenu.addEventListener('transitionend', function () {
                    submenu.style.display = 'none';
                    submenu.style.height = '';
                    submenu.style.transition = '';
                }, { once: true });
            } else {
                // Animación de despliegue
                submenu.style.display = 'block'; // Mostrar el elemento primero
                let height = submenu.scrollHeight + 'px'; // Obtener la altura completa del contenido
                submenu.style.height = 0; // Inicializar la altura a 0
                submenu.offsetHeight; // Forzar el reflow
                submenu.style.transition = 'height 0.3s ease'; // Transición suave
                submenu.style.height = height; // Expandir a la altura completa
                
                submenu.addEventListener('transitionend', function () {
                    submenu.style.height = '';
                    submenu.style.transition = '';
                }, { once: true });
            }
        });
    });
});


/*CARDSSS*/
document.addEventListener('DOMContentLoaded', function() {
    // Obtén el botón y el modal
    const agregarRegistroBtn = document.querySelector('[data-bs-toggle="modal"]');
    const modal = new bootstrap.Modal(document.getElementById('nuevoRegistroModal'));

    // Maneja el evento de clic en el botón para abrir el modal
    agregarRegistroBtn.addEventListener('click', function() {
        modal.show();
    });
});

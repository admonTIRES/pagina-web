document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.course-tabs__button');
    const sections = document.querySelectorAll('.course-tabs__section');

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const targetCourse = this.getAttribute('data-course');

            // Remover clase activa de todos los botones
            buttons.forEach(btn => {
                btn.classList.remove('course-tabs__button--active');
            });

            // Agregar clase activa al botón clickeado
            this.classList.add('course-tabs__button--active');

            // Ocultar todas las secciones
            sections.forEach(section => {
                section.classList.remove('course-tabs__section--active');
            });

            // Mostrar la sección correspondiente
            const targetSection = document.querySelector(`[data-content="${targetCourse}"]`);
            if (targetSection) {
                targetSection.classList.add('course-tabs__section--active');
            }
        });
    });
});
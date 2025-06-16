document.addEventListener('DOMContentLoaded', function () {
    // Animación principal de la tabla
    gsap.to('.certification-table', {
        opacity: 1,
        duration: 0.8,
        ease: 'power2.out'
    });

    // Animación de las filas
    gsap.to('.certification-table__row', {
        opacity: 1,
        y: 0,
        duration: 0.6,
        stagger: 0.1,
        ease: 'power2.out',
        delay: 0.3
    });

    // Animación hover para las filas (excepto el header)
    const rows = document.querySelectorAll('.certification-table__row:not(.certification-table__row--header)');

    rows.forEach(row => {
        row.addEventListener('mouseenter', function () {
            gsap.to(this, {
                scale: 1.02,
                boxShadow: '0 4px 15px rgba(0, 0, 0, 0.1)',
                duration: 0.3,
                ease: 'power2.out'
            });
        });

        row.addEventListener('mouseleave', function () {
            gsap.to(this, {
                scale: 1,
                boxShadow: 'none',
                duration: 0.3,
                ease: 'power2.out'
            });
        });
    });

    // Animación para las celdas de proctor
    const proctorCells = document.querySelectorAll('.certification-table__cell--proctor');
    proctorCells.forEach((cell, index) => {
        gsap.from(cell, {
            scale: 0,
            rotation: 360,
            duration: 0.6,
            delay: 0.8 + (index * 0.1),
            ease: 'back.out(1.7)'
        });
    });

    // Animación para las celdas de duración
    const durationCells = document.querySelectorAll('.certification-table__cell--duration');
    durationCells.forEach((cell, index) => {
        gsap.from(cell, {
            opacity: 0,
            x: -20,
            duration: 0.5,
            delay: 0.6 + (index * 0.1),
            ease: 'power2.out'
        });
    });

    // Efecto de resplandor en la fila de complemento
    gsap.to('.certification-table__row--complement', {
        boxShadow: '0 0 20px rgba(76, 175, 80, 0.3)',
        duration: 2,
        repeat: -1,
        yoyo: true,
        ease: 'power1.inOut'
    });

    // Animación para el título de nivel al hacer hover
    const levelCells = document.querySelectorAll('.certification-table__cell--left');
    levelCells.forEach(cell => {
        cell.addEventListener('mouseenter', function () {
            gsap.to(this.querySelector('.certification-table__cell--name'), {
                color: '#005b96',
                duration: 0.3,
                ease: 'power2.out'
            });
        });

        cell.addEventListener('mouseleave', function () {
            gsap.to(this.querySelector('.certification-table__cell--name'), {
                color: '#333',
                duration: 0.3,
                ease: 'power2.out'
            });
        });
    });
});
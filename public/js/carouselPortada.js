document.addEventListener('DOMContentLoaded', function () {
    const track = document.querySelector('.carousel-track');
    const cards = Array.from(document.querySelectorAll('.relevant-card'));
    const nextButton = document.querySelector('.carousel-button-next');
    const prevButton = document.querySelector('.carousel-button-prev');
    const dots = Array.from(document.querySelectorAll('.carousel-dot'));

    let cardWidth = cards[0].offsetWidth;
    let cardsPerView = Math.floor(track.offsetWidth / cardWidth);
    let currentIndex = 0;
    let maxIndex = Math.ceil(cards.length / cardsPerView) - 1;

    function updateDots() {
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === Math.floor(currentIndex / cardsPerView));
        });
    }

    function moveToIndex(index) {
        if (index < 0) index = 0;
        if (index > maxIndex) index = maxIndex;

        currentIndex = index;
        const offset = -index * cardsPerView * cardWidth;
        track.style.transform = `translateX(${offset}px)`;
        updateDots();
    }

    // Recalcular en cambios de tamaño de ventana
    function updateCarouselDimensions() {
        cardWidth = cards[0].offsetWidth;
        cardsPerView = Math.max(1, Math.floor(track.parentElement.offsetWidth / cardWidth));
        maxIndex = Math.max(0, Math.ceil(cards.length / cardsPerView) - 1);

        // Actualizar la posición actual
        moveToIndex(Math.min(currentIndex, maxIndex));
    }

    // Event listeners
    nextButton.addEventListener('click', () => moveToIndex(currentIndex + 1));
    prevButton.addEventListener('click', () => moveToIndex(currentIndex - 1));

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => moveToIndex(index));
    });

    window.addEventListener('resize', updateCarouselDimensions);

    // Inicializar
    updateCarouselDimensions();
});
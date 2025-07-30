document.addEventListener('DOMContentLoaded', function () {
    const track = document.querySelector('.carousel-track');
    const cards = Array.from(document.querySelectorAll('.relevant-card'));
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

    function updateCarouselDimensions() {
        cardWidth = cards[0].offsetWidth;
        cardsPerView = Math.max(1, Math.floor(track.parentElement.offsetWidth / cardWidth));
        maxIndex = Math.max(0, Math.ceil(cards.length / cardsPerView) - 1);
        moveToIndex(Math.min(currentIndex, maxIndex));
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => moveToIndex(index));
    });

    window.addEventListener('resize', updateCarouselDimensions);
    updateCarouselDimensions();

    // Desplazamiento automático
    setInterval(() => {
        currentIndex = (currentIndex + 1 > maxIndex) ? 0 : currentIndex + 1;
        moveToIndex(currentIndex);
    }, 5000);
});
document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.hero-carousel');
    const track = document.querySelector('.hero-carousel-track');
    const cards = document.querySelectorAll('.hero-card');

    if (!carousel || cards.length === 0) return;

    const gap = 20;
    let cardWidth = cards[0].offsetWidth + gap;
    let index = 0;
    let isDragging = false;
    let startX = 0;
    let autoPlay;

    const visibleCards = () => {
        if (window.innerWidth < 600) return 1;
        if (window.innerWidth < 1024) return 2;
        return 3;
    };

    const maxIndex = () => cards.length - visibleCards();

    const update = () => {
        track.style.transform = `translateX(-${index * cardWidth}px)`;
    };

    /* ===== AUTOPLAY ===== */
    const startAutoPlay = () => {
        autoPlay = setInterval(() => {
            index = index >= maxIndex() ? 0 : index + 1;
            update();
        }, 3500);
    };

    const stopAutoPlay = () => clearInterval(autoPlay);

    /* ===== DRAG (MOUSE) ===== */
    track.addEventListener('mousedown', e => {
        stopAutoPlay();
        isDragging = true;
        startX = e.pageX;
    });

    track.addEventListener('mouseup', e => {
        if (!isDragging) return;
        const diff = e.pageX - startX;
        if (diff < -50 && index < maxIndex()) index++;
        if (diff > 50 && index > 0) index--;
        update();
        startAutoPlay();
        isDragging = false;
    });

    track.addEventListener('mouseleave', () => isDragging = false);

    /* ===== TOUCH ===== */
    track.addEventListener('touchstart', e => {
        stopAutoPlay();
        startX = e.touches[0].clientX;
    });

    track.addEventListener('touchend', e => {
        const diff = e.changedTouches[0].clientX - startX;
        if (diff < -50 && index < maxIndex()) index++;
        if (diff > 50 && index > 0) index--;
        update();
        startAutoPlay();
    });

    /* ===== RESIZE ===== */
    window.addEventListener('resize', () => {
        cardWidth = cards[0].offsetWidth + gap;
        index = Math.min(index, maxIndex());
        update();
    });

    startAutoPlay();
});
document.addEventListener('DOMContentLoaded', function () {
    // Tab functionality
    const tabButtons = document.querySelectorAll('.tabs__button');

    tabButtons.forEach(button => {
        button.addEventListener('click', function () {
            tabButtons.forEach(btn => btn.classList.remove('tabs__button--active'));
            this.classList.add('tabs__button--active');
        });
    });

    // Carousel functionality
    const carouselTrack = document.querySelector('.carousel__news');
    const cards = document.querySelectorAll('.news');
    const prevBtn = document.querySelector('.carousel__button--prev');
    const nextBtn = document.querySelector('.carousel__button--next');

    let cardWidth = cards[0].offsetWidth + 15; // Card width + margin
    let scrollPosition = 0;
    let cardsPerView = Math.floor(carouselTrack.offsetWidth / cardWidth);

    function updateButtonVisibility() {
        prevBtn.style.visibility = scrollPosition <= 0 ? 'hidden' : 'visible';
        nextBtn.style.visibility = scrollPosition >= (cards.length - cardsPerView) * cardWidth ? 'hidden' : 'visible';
    }

    updateButtonVisibility();

    prevBtn.addEventListener('click', function () {
        if (scrollPosition > 0) {
            scrollPosition -= cardWidth;
            scrollPosition = Math.max(0, scrollPosition);
            carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
            updateButtonVisibility();
        }
    });

    nextBtn.addEventListener('click', function () {
        if (scrollPosition < (cards.length - cardsPerView) * cardWidth) {
            scrollPosition += cardWidth;
            scrollPosition = Math.min(scrollPosition, (cards.length - cardsPerView) * cardWidth);
            carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
            updateButtonVisibility();
        }
    });

    window.addEventListener('resize', function () {
        cardWidth = cards[0].offsetWidth + 15;
        cardsPerView = Math.floor(carouselTrack.offsetWidth / cardWidth);
        scrollPosition = 0;
        carouselTrack.style.transform = `translateX(0)`;
        updateButtonVisibility();
    });

    // Image hover effect
    cards.forEach(card => {
        const imageUrl = card.getAttribute('data-image');

        card.addEventListener('mouseenter', function () {
            this.style.backgroundImage = `url(${imageUrl})`;
        });

        card.addEventListener('mouseleave', function () {
            this.style.backgroundImage = 'none';
        });
    });
});
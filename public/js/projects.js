document.addEventListener('DOMContentLoaded', () => {
    // Elementos
    const header = document.querySelector('.projects__header');
    const infoSection = document.querySelector('.projects__info');
    const imageContainer = document.querySelector('.projects__image-container');
    const mainImage = document.querySelector('.projects__image');
    const thumbnails = document.querySelectorAll('.projects__thumbnail');
    const highlight = document.querySelector('.projects__highlight');
    const modal = document.querySelector('.projects__modal');
    const modalImage = document.querySelector('.projects__modal-image');
    const modalClose = document.querySelector('.projects__modal-close');
    const backBtn = document.querySelector('.projects__back-btn');
    const items = gsap.utils.toArray(".item"),
        details = document.querySelector('.detail'),
        detailContent = document.querySelector('.content'),
        detailImage = document.querySelector('.detail img'),
        detailTitle = document.querySelector('.detail .title'),
        detailSecondary = document.querySelector('.detail .secondary'),
        detailDescription = document.querySelector('.detail .description');


    // Timeline principal
    const mainTl = gsap.timeline({
        defaults: {
            ease: 'power3.out'
        }
    });

    // Animación inicial
    mainTl.to(header, {
        opacity: 1,
        duration: 0.8,
        delay: 0.3
    });

    mainTl.to(infoSection, {
        opacity: 1,
        x: 0,
        duration: 0.8,
        delay: 0.1
    }, '-=0.4');

    mainTl.to(imageContainer, {
        opacity: 1,
        x: 0,
        duration: 0.8
    }, '-=0.6');

    // Animar las miniaturas
    thumbnails.forEach((thumbnail, index) => {
        mainTl.to(thumbnail, {
            opacity: 1,
            y: 0,
            duration: 0.5,
            delay: index * 0.1
        }, '-=0.3');
    });

    // Animar el texto destacado
    mainTl.to(highlight, {
        opacity: 1,
        y: 0,
        duration: 0.5
    }, '-=0.2');

    // Configurar GSAP Flip para las imágenes
    // Efecto hover en miniaturas
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('mouseenter', () => {
            gsap.to(thumbnail, {
                scale: 1.05,
                duration: 0.3,
                ease: 'power2.out'
            });
        });

        thumbnail.addEventListener('mouseleave', () => {
            gsap.to(thumbnail, {
                scale: 1,
                duration: 0.3,
                ease: 'power2.out'
            });
        });
    });

    // Cambio de imágenes al hacer clic en las miniaturas
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', (e) => {
            // Si queremos que las miniaturas también cambien la imagen principal
            // además de mostrar el modal
            if (!e.target.classList.contains('flip-image')) {
                gsap.to(mainImage, {
                    opacity: 0,
                    duration: 0.3,
                    onComplete: () => {
                        mainImage.src = thumbnail.src;
                        gsap.to(mainImage, {
                            opacity: 1,
                            duration: 0.3
                        });
                    }
                });
            }
        });
    });
});
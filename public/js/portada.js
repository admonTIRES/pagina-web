document.addEventListener('DOMContentLoaded', function () {
    // Registrar el plugin MotionPath
    gsap.registerPlugin(MotionPathPlugin);
    gsap.registerPlugin(SplitText);

    // Animación de las tarjetas
    gsap.to('.relevant-card', {
        opacity: 1,
        y: 2,
        stagger: 0.2,
        duration: 1,
        ease: 'power3.out'
    });

    let splitTitle = SplitText.create(".main-title", {
        type: "chars, words, lines"
    });

    gsap.from(splitTitle.chars, {
        y: 100,
        autoAlpha: 0,
        stagger: 0.04
    })

    let split = SplitText.create(".description", {
        type: "chars, words, lines"
    });

    gsap.from(split.words, {
        y: 100,
        autoAlpha: 0,
        stagger: 0.01
    })

    // Suave animación del vector
    gsap.to('#wavePath', {
        attr: {
            d: "M0,320 C300,180 600,420 900,180 C1200,0 1500,420 1800,320"
        },
        duration: 8,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });

    // Animación de la plataforma
    gsap.from('.platform', {
        y: 100,
        duration: 1.5,
        ease: 'power3.out',
        delay: 0.5
    });

    // Animación del contenido principal
    gsap.from('.main-title', {
        x: -100,
        duration: 1,
        ease: 'power3.out'
    });

    gsap.from('.description', {
        x: -100,
        duration: 1,
        ease: 'bounce.out',
    });

    gsap.from('.arrow-icon', {
        x: -50,
        opacity: 0,
        duration: 1,
        delay: 0.4,
        ease: 'power3.out'
    });

    // Efecto parallax
    document.addEventListener('mousemove', (e) => {
        const moveX = (e.clientX / window.innerWidth - 0.5) * 20;
        const moveY = (e.clientY / window.innerHeight - 0.5) * 20;

        gsap.to('.platform', {
            x: moveX,
            y: moveY / 2,
            duration: 1,
            ease: 'power1.out'
        });

        gsap.to('#wavePath', {
            attr: {
                d: `M0,${300 + moveY} C300,${200 - moveY} 600,${400 + moveY} 900,${200 - moveY} C1200,${0 + moveY} 1500,${400 - moveY} 1800,${300 + moveY}`
            },
            duration: 2,
            ease: 'power1.out',
            overwrite: 'auto'
        });
    });
});
document.addEventListener('DOMContentLoaded', () => {
    // Create a timeline for the animation sequence
    const tl = gsap.timeline({ defaults: { ease: "power3.out" } });

    // Animate the title
    tl.to(".lines-of-business__title", {
        opacity: 1,
        y: 0,
        duration: 1.2,
        stagger: 0.2
    });

    // Animate the subtitle
    tl.to(".lines-of-business__subtitle", {
        opacity: 1,
        y: 0,
        duration: 1
    }, "-=0.8");

    // Animate the icon
    tl.to(".lines-of-business__icon", {
        opacity: 1,
        scale: 1,
        duration: 0.8,
        rotation: 360
    }, "-=0.8");

    // Animate the CTA button
    tl.to(".lines-of-business__cta", {
        opacity: 1,
        y: 0,
        duration: 0.8
    }, "-=0.5");

    // Create a hover animation for the title
    const titleElement = document.querySelector('.lines-of-business__title');
    titleElement.addEventListener('mouseenter', () => {
        gsap.to(titleElement, {
            scale: 1.02,
            duration: 0.3
        });
    });

    titleElement.addEventListener('mouseleave', () => {
        gsap.to(titleElement, {
            scale: 1,
            duration: 0.3
        });
    });
});


// GSAP animations for hover effect
gsap.registerPlugin();

document.querySelectorAll('.business__card').forEach(card => {
    const content = card.querySelector('.card-content');
    const bgImage = card.querySelector('.card-bg-image');

    // Create timeline for hover animation
    const tl = gsap.timeline({ paused: true });

    tl.to(content, {
        scale: 0.85,
        rotate: -5,
        y: -15,
        duration: 0.6,
        ease: "power2.out"
    })
        .to(bgImage, {
            scale: 1.05,
            duration: 0.6,
            ease: "power2.out"
        }, "-=0.6");

    // Mouse enter
    card.addEventListener('mouseenter', () => {
        tl.play();
    });

    // Mouse leave
    card.addEventListener('mouseleave', () => {
        tl.reverse();
    });
});

// Initial entrance animation
gsap.from('.business__card', {
    y: 50,
    duration: 0.8,
    stagger: 0.15,
    ease: "power2.out"
});

// Animate text elements
gsap.from('.lines-of-business__cardText', {
    y: 20,
    duration: 0.6,
    stagger: 0.1,
    delay: 0.5,
    ease: "power2.out"
});
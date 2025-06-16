document.addEventListener('DOMContentLoaded', () => {
    // Registrar plugins de GSAP
    gsap.registerPlugin(ScrollTrigger);

    const secondaryNavbar = document.getElementById('secondaryNavbar');
    const navItems = document.querySelectorAll('.nav-item');

    // Configurar ScrollTrigger para mostrar/ocultar navbar
    ScrollTrigger.create({
        trigger: "body",
        start: "100px top",
        end: "bottom bottom",
        onEnter: () => {
            gsap.to(secondaryNavbar, {
                duration: 0.6,
                ease: "power3.out",
                onStart: () => {
                    secondaryNavbar.classList.add('show-icons');
                }
            });
        },
        onLeaveBack: () => {
            gsap.to(secondaryNavbar, {
                duration: 0.4,
                ease: "power2.in",
                onComplete: () => {
                    secondaryNavbar.classList.remove('show-icons');
                }
            });
        }
    });

    // Animación de entrada escalonada de los iconos
    ScrollTrigger.create({
        trigger: "body",
        start: "100px top",
        onEnter: () => {
            gsap.fromTo('.nav-item',
                {
                    x: 50,
                    opacity: 0,
                    scale: 0.8
                },
                {
                    x: 0,
                    opacity: 1,
                    scale: 1,
                    duration: 0.5,
                    stagger: 0.1,
                    ease: "back.out(1.7)",
                    delay: 0.2
                }
            );
        }
    });

    // Funcionalidad de navegación
    navItems.forEach(item => {
        const link = item.querySelector('.nav-link');

        link.addEventListener('click', (e) => {
            e.preventDefault();

            // Remover clase activa de todos los items
            navItems.forEach(navItem => navItem.classList.remove('active'));

            // Agregar clase activa al item clickeado
            item.classList.add('active');

            // Obtener la sección objetivo
            const targetSection = link.getAttribute('href').substring(1);

            // Animación de click
            gsap.to(link, {
                scale: 0.95,
                duration: 0.1,
                yoyo: true,
                repeat: 1,
                ease: "power2.inOut"
            });

            // Aquí puedes agregar la lógica de navegación
            console.log(`Navegando a: ${targetSection}`);

            // Ejemplo: scroll a sección específica
            // const section = document.querySelector(`#${targetSection}`);
            // if (section) {
            //     section.scrollIntoView({ behavior: 'smooth' });
            // }

            // O redirigir a otra página
            // window.location.href = `/${targetSection}`;
        });
    });

    // Efectos hover adicionales con GSAP
    navItems.forEach(item => {
        const icon = item.querySelector('.nav-icon');
        const text = item.querySelector('.nav-text');

        item.addEventListener('mouseenter', () => {
            gsap.to(icon, {
                rotation: 5,
                duration: 0.3,
                ease: "power2.out"
            });
        });

        item.addEventListener('mouseleave', () => {
            gsap.to(icon, {
                rotation: 0,
                duration: 0.3,
                ease: "power2.out"
            });
        });
    });

    // Animación del navbar al hacer hover
    secondaryNavbar.addEventListener('mouseenter', () => {
        gsap.to('.nav-icon', {
            scale: 1.1,
            duration: 0.2,
            stagger: 0.05,
            ease: "power2.out"
        });
    });

    secondaryNavbar.addEventListener('mouseleave', () => {
        gsap.to('.nav-icon', {
            scale: 1,
            duration: 0.2,
            stagger: 0.05,
            ease: "power2.out"
        });
    });

    // Función para destacar sección activa basada en scroll
    function updateActiveSection() {
        const sections = document.querySelectorAll('.content-section');
        const scrollPos = window.scrollY + 200;

        sections.forEach((section, index) => {
            const top = section.offsetTop;
            const bottom = top + section.offsetHeight;

            if (scrollPos >= top && scrollPos <= bottom) {
                navItems.forEach(item => item.classList.remove('active'));
                if (navItems[index]) {
                    navItems[index].classList.add('active');
                }
            }
        });
    }

    // Escuchar scroll para actualizar sección activa
    window.addEventListener('scroll', updateActiveSection);
});
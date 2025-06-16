document.addEventListener('DOMContentLoaded', function () {
  const businessCards = document.querySelectorAll('.business__card');
  const closeModalBtn = document.getElementById('closeModal');
  const servicesOverlay = document.getElementById('servicesOverlay');
  const cards = document.querySelectorAll('.lines-of-business__card');
  const contentContainer = document.getElementById('servicesContent');

  // Inicializar elementos con GSAP
  gsap.set(servicesOverlay, { visibility: 'hidden', opacity: 0 });
  gsap.set('.services__modal', { y: 30, opacity: 0 });
  gsap.set('.services__card', { y: 20, opacity: 0 });

  // Animación de entrada para las tarjetas de negocio
  gsap.from('.business__card', {
    y: 50,
    //opacity: 0,
    duration: 0.8,
    ease: 'power2.out',
    stagger: 0.2,
    delay: 0.5
  });

  // Función para abrir el modal con animaciones GSAP
  function openModal() {
    // Mostrar el overlay
    gsap.to(servicesOverlay, {
      visibility: 'visible',
      opacity: 1,
      duration: 0.3,
      ease: 'power2.out'
    });

    // Animar el modal
    gsap.to('.services__modal', {
      y: 0,
      opacity: 1,
      duration: 0.5,
      ease: 'back.out(1.7)'
    });

    // Animar las tarjetas secuencialmente
    gsap.to('.services__card', {
      y: 0,
      opacity: 1,
      duration: 0.4,
      ease: 'power2.out',
      stagger: 0.1,
      delay: 0.2
    });

    // Animar el botón de "Learn More"
    gsap.from('.services__learn-more', {
      opacity: 0,
      y: 10,
      duration: 0.4,
      delay: 0.6
    });
  }

  // Función para cerrar el modal con animaciones GSAP
  function closeModal() {
    // Primero ocultar las tarjetas
    gsap.to('.services__card', {
      y: 20,
      opacity: 0,
      duration: 0.3,
      stagger: 0.05
    });

    // Luego ocultar el modal
    gsap.to('.services__modal', {
      y: 30,
      opacity: 0,
      duration: 0.4,
      delay: 0.1
    });

    // Finalmente ocultar el overlay
    gsap.to(servicesOverlay, {
      opacity: 0,
      duration: 0.3,
      delay: 0.3,
      onComplete: () => {
        gsap.set(servicesOverlay, { visibility: 'hidden' });
      }
    });
  }

  // Añadir event listeners a todas las tarjetas de negocio
  businessCards.forEach(card => {
    card.addEventListener('click', openModal);
  });

  // Event listener para cerrar el modal
  closeModalBtn.addEventListener('click', closeModal);

  // Cerrar modal al hacer clic fuera
  servicesOverlay.addEventListener('click', (event) => {
    if (event.target === servicesOverlay) {
      closeModal();
    }
  });

  // Animar hover en tarjetas de servicios 
  document.querySelectorAll('.services__card').forEach(card => {
    card.addEventListener('mouseenter', () => {
      gsap.to(card, { y: -5, duration: 0.2, ease: 'power1.out' });
    });

    card.addEventListener('mouseleave', () => {
      gsap.to(card, { y: 0, duration: 0.2, ease: 'power1.out' });
    });
  });

  const services = {
    liderazgo: [
      { img: 'img/icon__services/c-azul.png', name: 'Capacitación', href: '/soluciones-tecnicas__capacitacion' },
      { img: 'img/icon__services/co-azul.png', name: 'Comercialización', href: '/control-de-pozos-con-certificacion-iadc-wellsharp' },
      { img: 'img/icon__services/con-azul.png', name: 'Consultoría', href: '/control-de-pozos-con-certificacion-iadc-wellsharp' },
      { img: 'img/icon__services/m-azul.png', name: 'Mantenimiento', href: '/control-de-pozos-con-certificacion-iadc-wellsharp' },
    ],
    medioambiente: [
    ],
    tecnicas: [
      { img: 'img/icon__services/c-rojo.png', name: 'Capacitación', href: '/soluciones-tecnicas__capacitacion' },
    ],
    calidad: [
    ],
    sst: [
      { img: 'img/icon__services/c-aFuerte.png', name: 'Capacitación', href: '/capacitaciones-sst' },
      { img: 'img/icon__services/con-aFuerte.png', name: 'Consultoría', href: '/consultoria-sst' },
    ]
  };

  cards.forEach(card => {
    card.addEventListener('click', () => {
      const type = card.dataset.type;

      // Vaciar el contenedor actual
      contentContainer.innerHTML = '';

      // Construir el HTML dinámicamente
      services[type].forEach(service => {
        const cardHTML = `
          
            <div class="services__card">
              <div class="services__icon">
                <a href="${service.href}">
                <img class="services__img" src="${service.img}" alt="">
              </div>
              <div class="services__name">${service.name}</div>
            </div>
          `;
        contentContainer.innerHTML += cardHTML;
      });

      // Mostrar modal
      servicesOverlay.classList.add('active'); // Asegúrate de tener CSS para `.active { display: block; }`
    });
  });

  closeModal.addEventListener('click', () => {
    servicesOverlay.classList.remove('active');
  });
});












contentContainer.innerHTML = '';

business.services.forEach(service => {
  const cardHTML = `
    <div class="services__card">
      <div class="services__icon">
        <a href="${service.href}">
          <i class="${service.icon} services__icon-img"></i>
        </a>
      </div>
      <div class="services__name">${service.name}</div>
    </div>
  `;
  contentContainer.innerHTML += cardHTML;
});


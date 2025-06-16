document.addEventListener('DOMContentLoaded', () => {
  const counters = document.querySelectorAll('.counter');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const counter = entry.target;
      const target = +counter.getAttribute('data-target');

      if (entry.isIntersecting) {
        let count = 0;

        const updateCount = () => {
          const speed = target / 100;
          if (count < target) {
            count += Math.ceil(speed);
            counter.innerText = count > target ? target : count;
            requestAnimationFrame(updateCount);
          }
        };

        counter.innerText = '0'; // Reiniciar al volver a entrar
        counter.classList.add('visible');
        updateCount();
      } else {
        counter.classList.remove('visible');
        counter.innerText = '0'; // Reiniciar cuando sale del viewport
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(counter => observer.observe(counter));
});
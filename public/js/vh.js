function updateViewportHeight() {
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
}

function updateViewportWidth() {
  const vw = window.innerWidth * 0.01;
  document.documentElement.style.setProperty('--vw', `${vw}px`);
}

// Ejecutar al cargar y en cambios de orientación o redimensionamiento
window.addEventListener('resize', updateViewportHeight);
window.addEventListener('orientationchange', updateViewportHeight);
updateViewportHeight();

window.addEventListener('resize', updateViewportWidth);
window.addEventListener('orientationchange', updateViewportWidth);
updateViewportWidth();


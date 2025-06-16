
const menu = document.getElementById('menu');
const menuIcon = document.getElementById('menu-icon');
const closeMenu = document.getElementById('close-menu');

menuIcon.addEventListener('click', () => {
  menu.classList.add('active');
});

closeMenu.addEventListener('click', () => {
  menu.classList.remove('active');
});

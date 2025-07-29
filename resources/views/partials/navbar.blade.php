<nav class="navbar">
    <div>
        <img src="img/logo.png" alt="">
    </div>

    <div class="navbar__options">
        <div class="navbar__icon" id="menu-icon">&#9776;</div>
        <div class="navbar__menu" id="menu">
            <div class="navbar__close" id="close-menu">&times;</div>
            <ul>
                <li><a href="{{ route('home') }}">Inicio</a></li>
                <li><a href="{{ route('projects') }}">Proyectos</a></li>
                <li><a href="{{ route('about-us') }}">Sobre nosotros</a></li>
            </ul>
        </div>
    </div>
    <script src="js/main.js"></script>
</nav>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="20x20" href="/img/favicon.png">
    <title>Results in Performance</title>

    <link href="styles/css/mobile.css?v=1.0" rel="stylesheet" media="all and (max-width: 600px)">
    <link href="styles/css/desktop.css?v=1.2" rel="stylesheet" media="all and (min-width: 600px)">


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</head>

<body class="body">
    @include('partials.navbar')
    @include('partials.navbar-secundario')

    <main>
        @yield('content')
    </main>

    @include('partials.widget')
    @include('partials.footer')

    <!-- Js -->
    <script src="js/navbar.js"></script>
    <script src="js/main.js"></script>
    <script src="js/news.js"></script>
    <script src="js/portada.js"></script>
    <script src="js/services.js"></script>
    <script src="js/lines-of-business.js"></script>
    <script src="js/about-us.js"></script>
    <script src="js/projects.js"></script>
    <script src="js/courses-table.js"></script>
    <script src="js/courses.js"></script>
    <script src="js/carouselPortada.js"></script>
    <script src="js/words.js"></script>
    <script src="js/nueva-imagen.js"></script>
    <script src="js/navbar-secundario.js"></script>
    <script src="js/vh.js"></script>

    <!-- Gsap -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/Draggable.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/DrawSVGPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/EaselPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/Flip.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/GSDevTools.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/InertiaPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/MotionPathHelper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/MotionPathPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/MorphSVGPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/Observer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/Physics2DPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/PhysicsPropsPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/PixiPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrambleTextPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
    <!-- ScrollSmoother requires ScrollTrigger -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollSmoother.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollToPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/TextPlugin.min.js"></script>

</body>

</html>
@extends('layouts.base')
@section('content')

<div class="projects">
    <div class="projects__content">
        <div class="projects__info ">
            <h1 class="projects__title">Estudios de higiene industrial de las instalaciones de PEMEX EXPLORACIÓN Y PRODUCCIÓN (PEP) </h1>
            <div class="course-tabs">

                <div class="course-tabs__container">
                    <!-- Botones de navegación -->
                    <nav class="course-tabs__nav">
                        <button class="course-tabs__button course-tabs__button--active" data-course="antecedentes">
                            <i class="fas fa-book"></i> Proyecto
                        </button>
                    </nav>

                    <!-- Contenido de cada sección -->
                    <div class="course-tabs__content">
                        <!-- Antecedentes del Curso -->
                        <div class="course-tabs__section course-tabs__section--active" data-content="antecedentes">

                            <p class="course-tabs__text">
                                Contrato para la elaboración y/o actualización de estudios de higiene industrial de las
                                instalaciones de PEMEX EXPLORACIÓN Y PRODUCCIÓN (PEP) e integración de los servicios
                                preventivos de seguridad y salud en el trabajo desde enero de 2020 hasta enero 2022.
                                Durante este periodo se realizaron los servicios de atlas de riesgo a la salud (ARS) en más
                                de 170 instalaciones de PEP ubicadas entre las regiones norte, sur y marina. 
                                <br><br>
                                Así como
                                instalaciones de perforación que incluye talleres, equipos de perforación terrestre y
                                marina, donde se identificaron y evaluaron los agentes físicos (iluminación, ruido,
                                vibraciones, condiciones térmicas elevadas, radiaciones ionizantes y radiaciones electro
                                magnéticas no ionizantes), agentes químicos y agentes biológicos (agua y hielo para consumo
                                humano, ventilación y calidad de aire interior). <br><br>Además de los factores de riesgo
                                psicosocial, factores de riesgo ergonómico y la evaluación de infraestructura y servicios al
                                personal, generando con nuestra capacidad técnica y el software de desarrollo propio
                                SEHILAB© más de 2600 informes y los mapas de riesgos a la salud para cada una de las
                                instalaciones.
                                De igual forma se contó con la colaboración y experiencia de más de 50 especialistas
                                multidisciplinarios en salud y seguridad en el trabajo (higienistas, ergónomos y psicólogos)
                                para la integración de los servicios preventivos de seguridad y salud en el trabajo.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Incluir Font Awesome para los iconos -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

            <!-- Prueba-->
            <div class="detail"></div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

        </div>


    </div>
    <div class="projects__image-container">
        <img src="img/PEMEX PEP.jpg" alt="Gato" class="projects__image">
    </div>
</div>
@endsection
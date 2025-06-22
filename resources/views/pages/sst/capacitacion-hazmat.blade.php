@extends('layouts.base')
@section('content')

<div class="projects">
    <div class="projects__content">
        <div class="projects__info ">
            <h1 class="projects__title">Curso de HazMat </h1>
            <div class="course-tabs">

                <div class="course-tabs__container">
                    <!-- Botones de navegación -->
                    <nav class="course-tabs__nav">
                        <button class="course-tabs__button course-tabs__button--active" data-course="antecedentes">
                            <i class="fas fa-book"></i> Antecedentes del Curso
                        </button>
                        <button class="course-tabs__button" data-course="temario">
                            <i class="fas fa-list-ul"></i> Temario
                        </button>
                        <button class="course-tabs__button" data-course="perfil">
                            <i class="fas fa-user-graduate"></i> Dirigido A:
                        </button>
                       <button class="course-tabs__button" data-course="temario" id="DESCARGAR_FLYER_HAZMAT" onclick="window.open('archivosweb/Flyer_HazMat/Flyer%20HazMat.pdf', '_blank')">
                       <i class="fa-solid fa-download"></i> Descargar Flyer
                    </button>


                    </nav>

                    <!-- Contenido de cada sección -->
                    <div class="course-tabs__content">
                        <!-- Antecedentes del Curso -->
                        <div class="course-tabs__section course-tabs__section--active" data-content="antecedentes">

                            <p class="course-tabs__text">
                                El manejo de materiales peligrosos tiene sus orígenes en el desarrollo industrial y químico, cuando comenzaron a utilizarse sustancias dañinas como metales pesados y ácidos. A mediados del siglo XX, 
                                el crecimiento de industrias como la petroquímica, la farmacéutica y la minera incrementó significativamente el uso de estos materiales, lo que derivó en numerosos incidentes industriales y ambientales. 
                                Estos hechos evidenciaron la urgente necesidad de establecer controles y normativas específicas para su manejo seguro.
                                <br><br>
                                Uno de los casos más representativos fue el desastre de Bhopal (India, 1984), donde la liberación de isocianato de metilo causó miles de muertes, marcando un antes y un después en la conciencia internacional
                                 sobre los riesgos asociados a estas sustancias.
                                 <br><br>
                                 En este contexto, el diseño y la metodología de este curso están orientados a cumplir con los requisitos normativos y las necesidades de los participantes, quienes adquirirán los conocimientos necesarios para <b> identificar los peligros</b> que 
                                 representan los distintos materiales peligrosos, mediante la interpretación correcta de las etiquetas de identificación y 
                                 las hojas de seguridad de los diferentes productos que manejan en su centro de trabajo.
                            </p>
                        </div>

                        <!-- Temario -->
                        <div class="course-tabs__section" data-content="temario">
                            <p class="course-tabs__text">
                                Alguno de los temas incluidos:
                            </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Definiciones y conceptos</li>
                                <li class="course-tabs__list-item">Regulaciones, leyes, reglamentos y normas nacionales</li>
                                <li class="course-tabs__list-item">Clasificación y manejo de sustancias peligrosas y residuos</li>
                                <li class="course-tabs__list-item">Sistema Globalmente Armonizado</li>
                                <li class="course-tabs__list-item">Comunicación de riesgos y peligros</li>
                               
                            </ul>
                        </div>

                        

                        <!-- Perfil del estudiante -->
                        <div class="course-tabs__section" data-content="perfil">
                            <p class="course-tabs__text">
                               Personal que maneje y/o supervise operaciones con materiales peligrosos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Incluir Font Awesome para los iconos -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

            <time class="projects__date"></time>

           
            <!-- Prueba-->
            <div class="detail"></div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        </div>

        
    </div>
    <div class="projects__image-container">
        <img src="archivosweb/Flyer_HazMat/imagen1.jpg" alt="Gato" class="projects__image">
    </div>
</div>
@endsection
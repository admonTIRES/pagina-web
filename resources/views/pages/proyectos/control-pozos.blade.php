@extends('layouts.base')
@section('content')

<div class="projects">
    <div class="projects__content">
        <div class="projects__info ">
            <h1 class="projects__title">Cursos de control de pozos con certificación internacional IADC-WellSharp</h1>
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
                                A través de nuestro socio comercial Smith Mason & CO, proveemos cursos de control de pozos con
                                certificación internacional IADC-WellSharp nivel introductorio, nivel perforador y nivel
                                supervisor con preventor (BOP) de superficie y combinado (superficie y submarino) para
                                operaciones de perforación, completamiento y reacondicionamiento de pozos petroleros. <br><br>
                                De igual forma somos un centro asociado del IWCF para proveer el curso de control de pozos para
                                operaciones de perforación (IWCF-Drilling Well Control Programme), en los niveles 2, 3 y 4 y el
                                curso de control de presiones en intervención a pozos (IWCF-Well Intervention Pressure Control
                                Programme-WIPC) para operaciones de Wireline, Coiled Tubing y Snubbing.
                                <br><br>
                                Nuestro centro de entrenamiento cuenta con 3 simuladores de control de pozos para las prácticas
                                y evaluaciones que, junto con la metodología interactiva y la experiencia de nuestros
                                instructores aprobados por los entes acreditadores, mejoramos el desempeño y las competencias de
                                los más de 650 estudiantes entrenados en más de 100 cursos.
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
        <img src="img/simulador-composicion.png" alt="Gato" class="projects__image">
    </div>
</div>
@endsection
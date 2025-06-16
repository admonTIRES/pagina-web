@extends('layouts.base')
@section('content')

<div class="projects">
    <div class="projects__content">
        <div class="projects__info ">
            <h1 class="projects__title">Prevención de Pega de Tubería (SPP)</h1>
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
                        <button class="course-tabs__button" data-course="acreditacion">
                            <i class="fas fa-certificate"></i> Acreditación
                        </button>
                        <button class="course-tabs__button" data-course="perfil">
                            <i class="fas fa-user-graduate"></i> Perfil del estudiante
                        </button>
                    </nav>

                    <!-- Contenido de cada sección -->
                    <div class="course-tabs__content">
                        <!-- Antecedentes del Curso -->
                        <div class="course-tabs__section course-tabs__section--active" data-content="antecedentes">

                            <p class="course-tabs__text">Este programa de certificación hace énfasis en el entrenamiento
                                riguroso para el personal con responsabilidades en el control de pozos, logrando
                                desarrollar
                                competencias (conocimientos y habilidades específicas) para cada categoría.
                            </p>
                        </div>

                        <!-- Temario -->
                        <div class="course-tabs__section" data-content="temario">
                            <p class="course-tabs__text">Algunos de los temas incluidos en los niveles 3 y 4 son:</p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Fundamentos de un brote</li>
                                <li class="course-tabs__list-item">Acción del gas en el pozo</li>
                                <li class="course-tabs__list-item">Procedimientos y métodos para matar el pozo</li>
                                <li class="course-tabs__list-item">Organizando una operación para matar el pozo</li>
                            </ul>
                        </div>

                        <!-- Acreditación -->
                        <div class="course-tabs__section" data-content="acreditacion">
                            <p class="course-tabs__text">Las personas que aprueben el curso reciben un certificado y
                                credencial
                                de IADC-WellSharp, nivel perforador o supervisor, con una vigencia de 2 años a partir de
                                la fecha
                                del examen. Los exámenes se aprueban por separado obteniendo un puntaje mínimo de
                                75/100% en cada uno.
                                El curso se certifica a través de Smith Mason & Co, centro de entrenamiento acreditado
                                por IADC.</p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Puntaje mínimo de aprobación 75/100%</li>
                                <li class="course-tabs__list-item">Evaluaciones parciales aprobadas</li>
                                <li class="course-tabs__list-item">Certificado oficial al finalizar</li>
                            </ul>
                        </div>

                        <!-- Perfil del estudiante -->
                        <div class="course-tabs__section" data-content="perfil">
                            <p class="course-tabs__text">Para los niveles 3 y 4 se recomienda al estudiante:</p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Haber aprobado un curso introductorio (nivel 2)</li>
                                <li class="course-tabs__list-item">Habilidades de lecto-escritura</li>
                                <li class="course-tabs__list-item">Operaciones matemáticas básicas</li>
                                <li class="course-tabs__list-item">Uso de la calculadora</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Incluir Font Awesome para los iconos -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

            <time class="projects__date">Experiencia del curso</time>

            <div class="projects__gallery">
                <!-- Prueba-->
                <div class="item" data-title="Dog" data-secondary="I'm trying to sleep here.">
                    <img class="projects__thumbnail" src="img/simulador.jpg" alt="" />
                </div>

                <div class="item" data-title="Dog" data-secondary="I'm trying to sleep here.">
                    <img class="projects__thumbnail" src="img/simulador.jpg" alt="" />
                </div>

                <div class="item" data-title="Owl" data-secondary="Hoo are you?">
                    <img class="projects__thumbnail" src="img/simulador.jpg" alt="" />
                </div>
            </div>

            <!-- Prueba-->
            <div class="detail"></div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        </div>

    </div>
    <div class="projects__image-container">
        <img src="img/simulador.jpg" alt="Gato" class="projects__image">
    </div>
</div>
@endsection
@extends('layouts.base')
@section('content')

<div class="projects">
    <div class="projects__content">
        <div class="projects__info ">
            <h1 class="projects__title">Evaluación e intervención de los factores de riesgos psicosociales</h1>
            <div class="course-tabs">

                <div class="course-tabs__container">
                    <!-- Botones de navegación -->
                    <nav class="course-tabs__nav">
                        <button class="course-tabs__button course-tabs__button--active" data-course="antecedentes">
                            <i class="fas fa-book"></i> Antecedentes del Curso
                        </button>
                        <button class="course-tabs__button" data-course="temario">
                            <i class="fas fa-list-ul"></i> Soluciones
                        </button>
                        <button class="course-tabs__button" data-course="acreditacion">
                            <i class="fas fa-certificate"></i> Dirigido a
                        </button>
                        <button class="course-tabs__button" data-course="perfil">
                            <i class="fas fa-user-graduate"></i> Infografía
                        </button>
                    </nav>

                    <!-- Contenido de cada sección -->
                    <div class="course-tabs__content">
                        <!-- Antecedentes del Curso -->
                        <div class="course-tabs__section course-tabs__section--active" data-content="antecedentes">

                            <p class="course-tabs__text">
                                De acuerdo con la Organización Internacional del trabajo (OIT), cada año se producen 374
                                millones
                                de lesiones y enfermedades no mortales relacionadas con el trabajo, muchas de las cuales
                                provocan
                                ausencias prolongadas del trabajo afectando la salud mental de los trabajadores, así
                                como la
                                productividad y la competitividad de las empresas. <br> Desde esta perspectiva en
                                México, el 30 de abril
                                del 2024 se publicó en el Diario Oficial de la Federación (DOF) el acuerdo donde la
                                Secretaría del
                                Trabajo y Previsión Social (STPS) da a conocer el Catálogo de las Cédulas para la
                                Valuación de las
                                Enfermedades de Trabajo, ya que se incrementaron de 161 a 194 enfermedades de trabajo,
                                alineadas
                                con la Clasificación Internacional de Enfermedades CIE-11 de la Organización Mundial de
                                la Salud (OMS)
                                y que impactan significativamente a los colaboradores en las diferentes industrias y
                                sectores económicos. <br>
                                Derivado de lo anterior y de las transformaciones significativas en el mundo laboral,
                                Results In Performance
                                ha apostado al progreso tecnológico para identificar y evaluar las nuevas formas de
                                organización del trabajo
                                y de relaciones laborales que han dado lugar a nuevos riesgos y desafíos relacionados
                                con la salud mental y
                                la seguridad en el trabajo, de acuerdo con la NOM-035-STPS-2018.
                            </p>
                        </div>

                        <!-- Soluciones -->
                        <div class="course-tabs__section" data-content="temario">
                            <p class="course-tabs__text">
                                Results In Performance provee soluciones confiables e innovadoras a través de
                                tecnologías de última generación
                                para comprender y mejorar el bienestar de los colaboradores, así como aumentar su
                                competitividad y productividad
                                en los centros de trabajo. Algunas de las soluciones que brinda Results In Performance
                                al realizar la evaluación
                                e intervención de los factores de riesgos psicosociales de acuerdo con la
                                NOM-035-STPS-2018 son:
                            </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Planificación del reconocimiento del riesgo
                                    psicosocial en un trabajo conjunto con los líderes del centro de trabajo. (Opcional)
                                </li>
                                <li class="course-tabs__list-item">Difusión y entrega de información a los colaboradores
                                    acerca de los factores de riesgo psicosocial. (Opcional)</li>
                                <li class="course-tabs__list-item">Aplicación de los instrumentos para la identificación
                                    y análisis de los factores de riesgo psicosocial y la evaluación del entorno
                                    organizacional de forma presencial o en línea a través de nuestro Software SEHILAB
                                    ®.</li>
                                <li class="course-tabs__list-item">Evaluación y/o implementación de mecanismos para
                                    presentar quejas por prácticas opuestas al entorno organizacional favorable y para
                                    denunciar actos de violencia laboral, a través de tecnologías innovadoras.</li>
                                <li class="course-tabs__list-item">Desarrollo, ejecución y seguimiento de planes de
                                    intervención y prevención personalizados, incluyendo la aplicación de instrumentos
                                    y/o pruebas psicológicas adicionales para evaluar los efectos negativos en los
                                    colaboradores, generados por la exposición al factor de riesgo psicosocial.</li>
                            </ul>
                        </div>

                        <!-- Dirigido a -->
                        <div class="course-tabs__section" data-content="acreditacion">
                            <p class="course-tabs__text">
                                Todas las empresas comprometidas con el bienestar y la salud mental de sus
                                colaboradores, así como con la creación de un entorno organizacional positivo.
                            </p>
                        </div>

                        <!-- Perfil del estudiante -->
                        <div class="course-tabs__section" data-content="perfil">
                            <p class="course-tabs__text">

                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Incluir Font Awesome para los iconos -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

            <time class="projects__date">Experiencia del curso</time>


            <div class="projects__gallery">
                <!-- Prueba-->
                <div class="item" data-title="Dog" data-secondary="">
                    <img class="projects__thumbnail" src="img/simulador.jpg" alt="" />
                </div>

                <div class="item" data-title="Dog" data-secondary="">
                    <img class="projects__thumbnail" src="img/simulador.jpg" alt="" />
                </div>

                <div class="item" data-title="Owl" data-secondary="">
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
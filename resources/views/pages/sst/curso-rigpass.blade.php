@extends('layouts.base')
@section('content')

<div class="projects">
    <div class="projects__content">
        <div class="projects__info ">
            <h1 class="projects__title">Orientación en HSE – IADC RigPass</h1>
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
                            <p class="course-tabs__text">
                                El Rig Pass es una orientación en salud, seguridad en el trabajo y medio ambiente (HSE),
                                relacionada con los trabajos de perforación terrestre y costa afuera, que se brinda a
                                todo
                                el personal antes de iniciar sus labores con el fin de facilitar su desempeño en el
                                trabajo
                                y evitar situaciones riesgosas lamentables al fomentar prácticas seguras de trabajo.
                                <br><br>
                                La industria petrolera y de gas trabaja con extensa normatividad y herramientas de
                                seguridad,
                                para la prevención de incidentes; por eso mismo es importante que cada trabajador
                                conozca al menos
                                los procedimientos generales que las empresas del sector utilizan para agilizar y
                                fortalecer el
                                proceso de incorporación del personal.
                            </p>
                        </div>

                        <!-- Temario -->
                        <div class="course-tabs__section" data-content="temario">
                            <p class="course-tabs__text">
                                Los temas se incluyen de acuerdo con la duración del curso y el tipo de endorso
                                (terrestre y terrestre-costa afuera)
                                con una duración de 8 horas y 12 horas respectivamente, de acuerdo con los
                                requerimientos establecidos por el ente acreditador.
                                Los temas incluidos son: Contenido medular
                            </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Generalidades de seguridad</li>
                                <li class="course-tabs__list-item">Equipo de protección personal</li>
                                <li class="course-tabs__list-item">Comunicación del peligro y manejo de materiales
                                    peligrosos</li>
                                <li class="course-tabs__list-item">Salud ocupacional</li>
                                <li class="course-tabs__list-item">Procedimientos especiales de trabajo</li>
                                <li class="course-tabs__list-item">Seguridad contraincendios</li>
                                <li class="course-tabs__list-item">Manejo de materiales</li>
                                <li class="course-tabs__list-item">Primeros auxilios y salud</li>
                                <li class="course-tabs__list-item">Ambientación en equipos de perforación y plataformasl
                                </li>
                                <li class="course-tabs__list-item">Respuesta a emergencias</li>
                                <li class="course-tabs__list-item">Protección ambiental</li>
                            </ul>

                            <p class="course-tabs__text">
                                Contenido para endorso terrestre
                            </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Excavaciones, trincheras y zanjas</li>
                                <li class="course-tabs__list-item">Tanques y presas de lodos</li>
                            </ul>

                            <p class="course-tabs__text">
                                Contenido para endorso costa afuera
                            </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Transporte a instalaciones marítimas</li>
                                <li class="course-tabs__list-item">Seguridad en el agua</li>
                                <li class="course-tabs__list-item">Desechos marinos</li>
                            </ul>
                        </div>

                        <!-- Acreditación -->
                        <div class="course-tabs__section" data-content="acreditacion">
                            <p class="course-tabs__text">
                                El programa de orientación HSE – RigPass incluye sesiones teóricas, proyectos
                                vivenciales
                                y proyectos de aplicación al lugar de trabajo para mejorar el desempeño en seguridad de
                                los
                                empleados de nuevo ingreso a la industria de perforación. Las personas que aprueben el
                                curso
                                con un 80% reciben un certificado y una credencial emitidos por la IADC. Aunque el ente
                                acreditador
                                no establece una vigencia para el curso, las compañías pueden definirla de acuerdo con
                                sus necesidades.
                            </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Credencial emitidos por la IADC</li>
                                <li class="course-tabs__list-item">Certificado oficial al finalizar</li>
                            </ul>
                        </div>

                        <!-- Perfil del estudiante -->
                        <div class="course-tabs__section" data-content="perfil">
                            <p class="course-tabs__text">
                                Personal de la industria de perforación interesados en adquirir y actualizar sus
                                conocimientos en salud,
                                seguridad en el trabajo y medio ambiente, relacionados con su entorno laboral.
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
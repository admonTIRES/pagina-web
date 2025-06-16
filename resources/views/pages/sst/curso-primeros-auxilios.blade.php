@extends('layouts.base')
@section('content')

<div class="projects">
    <div class="projects__content">
        <div class="projects__info ">
            <h1 class="projects__title">Primeros Auxilios con certificación Medic First Aid</h1>
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
                                Desde 1978, los programas de capacitación de Medic First Aid (MFA) han sido utilizados
                                para
                                enseñar y certificar a los proveedores de primeros auxilios en una variedad de
                                organizaciones
                                e industrias de diferentes sectores económicos. El diseño y la metodología del curso
                                ayudan a
                                cumplir los requisitos y las necesidades de ofrecer primeros auxilios en el lugar de
                                trabajo.
                                El diseño curricular está basado en un enfoque sistemático, coherente y de fácil
                                recordación.
                                <br><br>
                                La metodología es interactiva, utilizando diferentes escenarios que ayudan al
                                participante a
                                desarrollar la competencia como proveedor de primeros auxilios en el lugar de trabajo o
                                en
                                múltiples ambientes. Los programas de capacitación de MFA cumplen con las normas
                                nacionales y
                                están basados en las mismas directrices internacionales y recomendaciones de
                                tratamiento,
                                utilizadas por la Asociación Americana del Corazón (AHA) y las Cruz Roja internacional.
                                Actualmente contamos con la última actualización de las guías del 2015.
                            </p>
                        </div>

                        <!-- Temario -->
                        <div class="course-tabs__section" data-content="temario">
                            <p class="course-tabs__text">
                                Los temas se incluyen de acuerdo con la duración del curso, que puede ir desde 4 horas
                                hasta
                                24 horas, de acuerdo con las habilidades que requieran desarrollar los participantes, en
                                combinación
                                de sesiones prácticas y evaluación de escenarios. Algunos de los temas que se podrían
                                incluir son:
                            </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Generalidades de primeros auxilios</li>
                                <li class="course-tabs__list-item">Responsabilidades del proveedor de MFA</li>
                                <li class="course-tabs__list-item">Consideraciones legales</li>
                                <li class="course-tabs__list-item">Seguridad personal</li>
                                <li class="course-tabs__list-item">Paro cardíaco repentino</li>
                                <li class="course-tabs__list-item">Valoración inicial y habilidades de RCP</li>
                                <li class="course-tabs__list-item">Uso del desfibrilador automático externo – DAE</li>
                                <li class="course-tabs__list-item">Escenarios prácticos</li>
                            </ul>
                            <p class="course-tabs__text">Opcionales:</p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Heridas, hemorragias, quemaduras</li>
                                <li class="course-tabs__list-item">Extremidades inflamadas, dolorosas, deformadas</li>
                                <li class="course-tabs__list-item">Hipotermia, golpe de calor</li>
                                <li class="course-tabs__list-item">Transporte de lesionados y uso de camilla</li>
                                <li class="course-tabs__list-item">Escenarios prácticos</li>
                            </ul>

                        </div>

                        <!-- Acreditación -->
                        <div class="course-tabs__section" data-content="acreditacion">
                            <p class="course-tabs__text">
                                El programa de capacitación de MFA incluye sesiones teóricas y escenarios prácticos para
                                mejorar
                                el desempeño en primeros auxilios básicos o avanzados. Las habilidades de los
                                participantes son
                                evaluadas por un instructor autorizado. Las personas que aprueben el curso reciben una
                                credencial
                                de certificación con una vigencia de 2 años a partir de la fecha del curso.
                            </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Evaluaciones parciales aprobadas</li>
                                <li class="course-tabs__list-item">Certificado oficial al finalizar</li>
                            </ul>
                        </div>

                        <!-- Perfil del estudiante -->
                        <div class="course-tabs__section" data-content="perfil">
                            <p class="course-tabs__text">
                                Cualquier persona que desee adquirir competencias para ser un proveedor de primeros
                                auxilios; personal
                                de empresas, colegios, brigadistas de primeros auxilios.
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
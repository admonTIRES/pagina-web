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

                         <button class="course-tabs__button" data-course="temario" id="DESCARGAR_FLYER_PEGA" onclick="window.open('archivosweb/Pega_tuberias/SPP Flyer RESULTS 190625.pdf', '_blank')">
                       <i class="fa-solid fa-download"></i> Descargar Flyer
                    </button>
                    </nav>

                    <!-- Contenido de cada sección -->
                    <div class="course-tabs__content">
                        <!-- Antecedentes del Curso -->
                        <div class="course-tabs__section course-tabs__section--active" data-content="antecedentes">

                            <p class="course-tabs__text">
                               <b> Nuestro enfoque </b>
                               <br><br>

                               La mayoría de los incidentes de pega de tubería se pueden prevenir. No obstante, la falta de una planificación adecuada, procedimientos operativos confusos o mal ejecutados, y la
                                insuficiente capacitación y competencias de las cuadrillas son factores determinantes que incrementan el riesgo de estos eventos.
                                <br><br>

                                Por lo anterior en las operaciones de perforación, el Perforador tiene un rol esencial en la prevención de la pega de tubería, ya que debe realizar una planificación detallada, saber el uso de técnicas adecuadas y mantener la eficiencia del sistema de lodos, los cuales son fundamentales para mantener el pozo en condiciones óptimas. Sin embargo, cuando surge un problema, la respuesta rápida del perforador es crucial para evitar que la situación se salga de control. 
                                Su capacidad para reaccionar al primer indicio de que la formación atrapa la sarta o el pozo se empaca puede marcar la diferencia.

                                <br><br>

                                A mayor comprensión del perforador sobre los problemas operacionales, mayores serán las posibilidades de mantener la tubería libre y operativa.
                                <br><br>

                                La clave para una prevención efectiva radica en la competencia y preparación del personal involucrado, para evitar que estos incidentes tengan largos periodos de tiempo no productivos y,
                                 en muchos casos, la pérdida de herramientas costosas en el fondo del pozo y/o del pozo
                        </div>

                        <!-- Temario -->
                        <div class="course-tabs__section" data-content="temario">
                            <p class="course-tabs__text">Este curso de dos (2) días, ha sido diseñado para prevenir uno de los problemas de perforación más costosos que enfrenta la industria petrolera.
                            </p>

                            <ul class="course-tabs__list">
                              <li class="course-tabs__list-item">Introducción a la prevención de pega de tubería</li>
                            <li class="course-tabs__list-item">Mecanismos y causas de pega de tubería</li>
                            <li class="course-tabs__list-item">Hoja de trabajo de pega de tubería / ejercicio</li>
                            <li class="course-tabs__list-item">Limpieza del agujero vertical / de alcance extendido (principios)</li>
                            <li class="course-tabs__list-item">Estabilidad del agujero</li>
                            <li class="course-tabs__list-item">Causas de inestabilidad del agujero</li>
                            <li class="course-tabs__list-item">Pérdida de circulación</li>
                            <li class="course-tabs__list-item">Pega diferencial</li>
                            <li class="course-tabs__list-item">Geometría del agujero</li>
                            <li class="course-tabs__list-item">Formaciones abrasivas / cemento</li>
                            <li class="course-tabs__list-item">Reconociendo las causas de la pega de tubería</li>
                            <li class="course-tabs__list-item">Operación y manejo de los martillos / problemas potenciales</li>
                            <li class="course-tabs__list-item">Liberando la pega de tubería (métodos primarios / secundarios)</li>
                            <li class="course-tabs__list-item">Prácticas de perforación horizontal</li>
                            <li class="course-tabs__list-item">Revisión de casos y ejercicios</li>

                            </ul>
                        </div>

                        <!-- Acreditación -->
                        <div class="course-tabs__section" data-content="acreditacion">
                            <p class="course-tabs__text">Las personas que aprueben el curso (70%) reciben una constancia de Results In Performance.</p>

                        </div>

                        <!-- Perfil del estudiante -->
                        <div class="course-tabs__section" data-content="perfil">
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Habilidades de lecto-escritura</li>
                                <li class="course-tabs__list-item">Experiencia en perforación</li>
                                
                            </ul>
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
        <img src="archivosweb/Pega_tuberias/SPP.jpg" alt="Gato" class="projects__image">
    </div>
</div>
@endsection
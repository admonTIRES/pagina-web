@extends('layouts.base')
@section('content')

<div class="projects">
    <div class="projects__content">
        <div class="projects__info ">
            <h1 class="projects__title">Curso Rig Inspection </h1>
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
                        <!-- 
                        <button class="course-tabs__button" data-course="antecedentes" id="DESCARGAR_FLYER_RIGPASS" onclick="window.open('archivosweb/Rig_Pass/Flyer Rig Pass Capacitación.pdf', '_blank')">
                            <i class="fa-solid fa-download"></i> Descargar Flyer
                        </button> -->
                    </nav>

                    <!-- Contenido de cada sección -->
                    <div class="course-tabs__content">
                        <!-- Antecedentes del Curso -->
                        <div class="course-tabs__section course-tabs__section--active" data-content="antecedentes">
                            <p class="course-tabs__text">
                                En la industria de perforación, un equipo de perforación en óptimas condiciones no es un lujo, es la diferencia entre operaciones rentables y pérdidas considerables por tiempos no productivos, accidentes o multas regulatorias.
                                <br><br>
                                Las fallas en los equipos de perforación han sido históricamente la principal causa de paros no programados y eventos de alto riesgo en pozos terrestre y costa afuera. Con la evolución de las normas internacionales (API, RP, IADC, ISO) y las regulaciones locales cada vez más estrictas (PEMEX, CNH, ASEA), la inspección rigurosa dejó de ser una buena práctica para convertirse en un requisito obligatorio de clientes, aseguradoras y operadores.
                                <br><br>
                                Un equipo de perforación inspeccionado por personal entrenado y competente, no solo cumple con la normatividad, sino que además genera confianza en las compañías operadoras, puede reducir primas de seguros y aumenta la disponibilidad operativa.
                                <br><br>
                                Este curso transforma inspectores en garantía de continuidad operacional.
                            </p>
                        </div>

                        <!-- Temario -->
                        <div class="course-tabs__section" data-content="temario">
                            <p class="course-tabs__text">
                                <b>1. Introducción</b>
                            </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Generalidades de la inspección de equipos</li>
                                <li class="course-tabs__list-item">Normas y estándares</li>
                                <li class="course-tabs__list-item">Certificaciones</li>
                                <li class="course-tabs__list-item">Mecanismos de desgaste en equipos</li>
                            </ul>
                            <br>
                            <p class="course-tabs__text">
                                <b>2. Sistema de levante</b>
                            </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Corona</li>
                                <li class="course-tabs__list-item">Estructura de la torre</li>
                                <li class="course-tabs__list-item">Mesa de trabajo</li>
                                <li class="course-tabs__list-item">Subestructura</li>
                                <li class="course-tabs__list-item">Bloque viajero y gancho</li>
                                <li class="course-tabs__list-item">Top Drive</li>
                                <li class="course-tabs__list-item">Malacate</li>
                                <li class="course-tabs__list-item">Cables y eslingas</li>
                                <li class="course-tabs__list-item">Winches neumáticos</li>
                                <li class="course-tabs__list-item">Llaves manuales, neumáticas e hidráulicas</li>
                                <li class="course-tabs__list-item">Herramientas de manejo</li>
                                <li class="course-tabs__list-item">Consola del perforador</li>
                            </ul>
                            <br>
                            <p class="course-tabs__text">
                                <b>3. Sistema de rotación</b>
                            </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Mesa rotaria</li>
                                <li class="course-tabs__list-item">Swivel</li>
                                <li class="course-tabs__list-item">Kelly y Kelly Spinner</li>
                            </ul>
                            <br>
                            <p class="course-tabs__text">
                                <b>4. Tubulares</b>
                            </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Estantes de tubería</li>
                                <li class="course-tabs__list-item">Rack de tubería (planchada)</li>
                            </ul>
                            <br>
                            <p class="course-tabs__text">
                                <b>5. Sistema de circulación</b>
                            </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Bombas de lodo</li>
                                <li class="course-tabs__list-item">Stand Pipe</li>
                                <li class="course-tabs__list-item">Equipo de control de sólidos</li>
                                <li class="course-tabs__list-item">Tanques o presas de lodos</li>
                            </ul>
                            <br>
                            <p class="course-tabs__text">
                                <b>6. Sistema de potencia</b>
                            </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Motores y generadores</li>
                                <li class="course-tabs__list-item">Compresores de aire</li>
                                <li class="course-tabs__list-item">Seguridad eléctrica y áreas clasificadas</li>
                            </ul>
                            <br>
                            <p class="course-tabs__text">
                                <b>7. Sistema de control de pozos</b>
                            </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Preventores</li>
                                <li class="course-tabs__list-item">Conexiones bridadas</li>
                                <li class="course-tabs__list-item">Acumulador de presión</li>
                                <li class="course-tabs__list-item">Tanque de viaje</li>
                                <li class="course-tabs__list-item">Choke Manifold</li>
                                <li class="course-tabs__list-item">Separador lodo/gas</li>
                                <li class="course-tabs__list-item">Líneas de control</li>
                            </ul>

                            <br>
                            <br>
                            <p class="course-tabs__text">
                                Para cursos In-Company, se pueden programar una visita de inspección a un equipo de perforación de un (1) día.
                            </p>


                        </div>

                        <!-- Acreditación -->
                        <div class="course-tabs__section" data-content="acreditacion">
                            <p class="course-tabs__text">
                                Las personas que aprueben el examen del curso con un porcentaje igual o mayor al 70% reciben un diploma del curso de Smith Mason/Results In Performance.
                            </p>

                            <!-- <img src="archivosweb/Flyer_certificación_IADC/IADC-WellSharp.png" alt="" style="width: 100%; height: auto; max-width: 500px; display: block; margin: 20px auto;" /> -->

                        </div>

                        <!-- Perfil del estudiante -->
                        <div class="course-tabs__section" data-content="perfil">
                            <p class="course-tabs__text">
                                Habilidades de lecto-escritura
                                Experiencia en equipos de perforación, reparación, completamiento de pozos

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
        <!-- <img src="archivosweb/Rig_Pass/Imagen1.jpg" alt="Gato" class="projects__image"> -->
    </div>
</div>
@endsection
@extends('layouts.base')
@section('content')

<div class="projects">
    <div class="projects__content">
        <div class="projects__info ">
            <h1 class="projects__title">Curso Rig Management </h1>
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
                                En la industria de perforación de pozos, los líderes del equipo y la cuadrilla en campo son responsables de la seguridad total, el rendimiento operativo, el cumplimiento normativo y los resultados económicos del pozo. Un mal manejo del talento humano, una decisión tardía o un conflicto no resuelto pueden traducirse en días de tiempo no productivo, incidentes graves, sobrecostos o hasta la pérdida de contratos con operadoras.
                                <br><br>
                                La perforación moderna ya no depende solo de conocimiento técnico, ya que más del 80% de los eventos no planificados y de los incidentes con consecuencias mayores están relacionados con factores humanos —falta de liderazgo efectivo, comunicación deficiente, manejo inadecuado de conflictos o toma de decisiones bajo presión—. Actualmente las empresas de perforación exigen cada vez más competencias para la <b> gestión de personas y liderazgo en seguridad </b> en los roles de supervisión y gerencia del equipo de perforación. Las empresas que no invierten en desarrollar estas habilidades pierden competitividad al tener mayor rotación de personal, menor eficiencia y dificultad para atraer contratos exigentes.
                                <br><br>
                                El Curso de <b> Rig Management </b> de <b> Results </b> está diseñado para transformar a perforadores, supervisores, toolpushers o jefes de equipo y futuros rig managers en líderes operativos de alto desempeño. Combina las realidades del campo de perforación con herramientas prácticas de liderazgo y gestión de equipos, enfocadas 100 % en el entorno de pozos terrestres y costa afuera.

                            </p>
                        </div>

                        <!-- Temario -->
                        <div class="course-tabs__section" data-content="temario">

                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Habilidades de liderazgo efectivo</li>
                                <li class="course-tabs__list-item">Análisis de las fortalezas del liderazgo personal </li>
                                <li class="course-tabs__list-item">La comunicación y sus estrategias</li>
                                <li class="course-tabs__list-item">Retroalimentación efectiva</li>
                                <li class="course-tabs__list-item">Trabajo en equipo</li>
                                <li class="course-tabs__list-item">Conociendo a los miembros del equipo</li>
                                <li class="course-tabs__list-item">Toma de decisiones</li>
                                <li class="course-tabs__list-item">Manejo de conflictos en el trabajo</li>
                            </ul>




                        </div>

                        <!-- Acreditación -->
                        <div class="course-tabs__section" data-content="acreditacion">
                            <p class="course-tabs__text">
                                Las personas que aprueben el examen del curso con un porcentaje igual o mayor al 70% reciben un diploma del curso de Results In Performance y la Constancia de Competencias o de Habilidades Laborales (DC-3).
                            </p>

                            <!-- <img src="archivosweb/Flyer_certificación_IADC/IADC-WellSharp.png" alt="" style="width: 100%; height: auto; max-width: 500px; display: block; margin: 20px auto;" /> -->

                        </div>

                        <!-- Perfil del estudiante -->
                        <div class="course-tabs__section" data-content="perfil">
                            <p class="course-tabs__text">
                                Habilidades de lecto-escritura

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
@extends('layouts.base')
@section('content')

<div class="projects">
    <div class="projects__content">
        <div class="projects__info ">
            <h1 class="projects__title">Contrato de ARS y ARP’s – CENAGAS</h1>
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
                                Contrato abierto para la elaboración del “Estudio para realizar el Análisis de Riesgo en los
                                Procesos (ARP) y el Atlas de Riesgo a la Salud en el Trabajo (ARS) en las instalaciones del
                                Centro Nacional de Control del Gas Natural – CENAGAS”, desde octubre de 2022 hasta marzo de
                                2023. <br><br>
                                Durante este periodo se llevaron a cabo más de 9 ARP's con el objetivo de identificar,
                                analizar, evaluar y jerarquizar los riesgos, así como los aspectos e impactos ambientales
                                asociados a los procesos. Esto con la finalidad de eliminar, prevenir, controlar y mitigar
                                situaciones de riesgo, mediante la elaboración de un Plan de Respuesta a Emergencias y un
                                Programa de Prevención de Accidentes. <br><br>
                                Asimismo, se desarrollaron 31 ARS con el propósito de identificar las áreas con riesgos por
                                exposición laboral, y evaluar la presencia de agentes físicos, químicos, biológicos, así
                                como factores ergonómicos y psicosociales a los que están expuestos los trabajadores del
                                CENAGAS. <br><br>
                                El proyecto contó con la participación y experiencia de más de 65 especialistas
                                multidisciplinarios en salud y seguridad en el trabajo —incluyendo higienistas, ergónomos y
                                psicólogos— para la integración de los servicios preventivos de seguridad y salud laboral,
                                el diagnóstico de salud en el trabajo, y el diseño del programa de salud para las
                                instalaciones, asignaciones o áreas contractuales del CENAGAS ubicadas en los estados de
                                Sonora, Chihuahua, Ciudad de México, Coahuila, Nuevo León, Tamaulipas, Tlaxcala, Querétaro,
                                Veracruz, Tabasco, entre otros.
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
        <img src="archivosweb/Factor_psico/shutterstock_699229372.jpg" alt="Gato" class="projects__image">
    </div>
</div>
@endsection
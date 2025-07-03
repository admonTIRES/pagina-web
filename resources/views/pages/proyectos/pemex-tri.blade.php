@extends('layouts.base')
@section('content')

<div class="projects">
    <div class="projects__content">
        <div class="projects__info ">
            <h1 class="projects__title">Contrato de ARS – PEMEX TRI</h1>
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
                                Contrato de servicios para la “Elaboración de Atlas de Riesgos a la Salud
                                (Actualización) incluye: Identificación y Control de Agentes Físicos, Químicos,
                                Biológico, así como factores de riesgos: Ergonómicos y Psicosociales, Programa de
                                Conservación Auditiva y Ventilación y Calidad del Aire en Sectores Operativos de la
                                Refinería Tula”.<br><br>

                                Durante los últimos tres años (2022–2024), se llevó a cabo la actualización del Atlas de
                                Riesgos a la Salud en más de 8 sectores y 54 plantas operativas de la Refinería Tula,
                                generando más de 500 informes técnicos y más de 60 mapas especializados de riesgo a la
                                salud.<br><br>

                                En el último año, se evaluaron más de 3,754 agentes físicos y 366 agentes químicos, así
                                como
                                61 muestras tomadas directamente a trabajadores para determinar el Índice Biológico de
                                Exposición (BEI’s). Además, se aplicaron evaluaciones a más de 250 trabajadores en
                                relación
                                con factores de riesgo psicosociales y ergonómicos, con el fin de identificar
                                condiciones
                                que pudieran afectar su salud laboral y establecer medidas de control, prevención y
                                mejora
                                en el entorno de trabajo.<br><br>
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
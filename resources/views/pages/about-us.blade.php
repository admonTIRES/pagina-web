@extends('layouts.base')
@section('content')

<div class="historia">
    <div>
        <img class="historia-img" src="img/ingeniera.png" alt="">
    </div>

    <div class="content-container">
        <div class="content-container__text">
            <p class="content-container__subtitle">Nuestra historia</p>
            <h1 class="content-container__title">Sobre Nosotros</h1>
            <p class="content-container__description">
                Results In Performance ® es una empresa cien porciento tabasqueña, líder en servicios de consultoría
                y capacitación en salud, seguridad, medio ambiente, calidad y liderazgo, dirigidos a todo tipo de
                industrias, con el fin de contribuir a mejorar su productividad y el desempeño, al entregar a nuestros
                clientes soluciones con valor agregado para manejar sus riesgos. <br><br> Contamos con un equipo
                multidisciplinario de especialistas con experticia en diferentes industrias que integran décadas de experiencia, 
                junto con la aplicación de tecnología de punta e innovación para brindar soluciones con altos estándares de calidad
                que garantizan la excelencia operacional. <br><br> A través de uno de nuestros socios globales, Smith Mason
                & Co, proporcionamos servicios de capacitación técnica en control de pozos para la industria de perforación y
                reparación de pozos petroleros, bajo las acreditaciones de la IADC e IWCF.</p>
        </div>

        <div class="historia__buttons">
            <button>Alto Desempeño</button>
            <button>Entrenamiento</button>
            <button>Consultoría</button>
            <button>Comercio</button>
            <button>Liderazgo</button>
        </div>

    </div>
</div>

<div class="mision">
    <div class="instructions">
        <h2>Nuestros Valores</h2>
        <p>Haz clic en cada pieza para descubrir un valor fundamental y su significado. Vuelve a hacer clic para
            ocultarlo.</p>
    </div>

    <div id="puzzle" class="puzzle"></div>

    <div class="values-container">
        <div id="placeholder" class="placeholder-text">
            Selecciona una pieza del puzzle para descubrir un valor y su significado...
        </div>

        <div id="value-01" class="value-description value--orange">
            <div class="value-title">Liderazgo</div>
            <div class="value-text">
                Afrontamos retos en un entorno motivador.
            </div>
            <div class="value-quote">
                "Donde hay amor, hay vida" - Mahatma Gandhi
            </div>
        </div>

        <div id="value-02" class="value-description value--red">
            <div class="value-title">Pasión</div>
            <div class="value-text">
                La pasión es el fuego interno que impulsa nuestras acciones y da sentido a nuestros esfuerzos.
                Es la energía que nos motiva a perseguir nuestros sueños con determinación,
                a amar profundamente y a vivir cada momento con intensidad y propósito.
            </div>
            <div class="value-quote">
                "Nada grande se ha hecho en el mundo sin una gran pasión" - Georg W.F. Hegel
            </div>
        </div>

        <div id="value-03" class="value-description value--green">
            <div class="value-title">Innovación</div>
            <div class="value-text">
                Generamos ideas creativas y usamos la tecnologí­a de punta.
            </div>
            <div class="value-quote">
                "La creatividad es la inteligencia divirtiéndose" - Albert Einstein
            </div>
        </div>

        <div id="value-04" class="value-description value--cyan">
            <div class="value-title">Servicio</div>
            <div class="value-text">
                Excedemos las expectativas.
            </div>
            <div class="value-quote">

            </div>
        </div>

        <div id="value-05" class="value-description value--blue">
            <div class="value-title">Trabajo en equipo</div>
            <div class="value-text">
                Proporcionamos confianza y compromiso. La dignidad es el valor inherente que posee cada ser humano por
                el simple hecho de existir.
                Es el respeto profundo hacia nosotros mismos y hacia otros, reconociendo que todos merecemos
                ser tratados con honor, consideración y justicia.
            </div>
            <div class="value-quote">
                "La dignidad no consiste en poseer honores, sino en merecerlos" - Aristóteles
            </div>
        </div>

        <div id="value-06" class="value-description value--purple">
            <div class="value-title">Integridad</div>
            <div class="value-text">
                Somos transparentes y coherentes entre lo que decimos y hacemos.
            </div>
            <div class="value-quote"></div>
        </div>

        <div id="value-07" class="value-description value--red">
            <div class="value-title">Responsabilidad social</div>
            <div class="value-text">
                comprometidos socialmente con los trabajadores, las comunidades donde interactuamos y el medio ambiente.
            </div>
            <div class="value-quote">
                "La libertad no es hacer lo que queremos, sino querer lo que hacemos" - Jean-Paul Sartre
            </div>
        </div>
    </div>

</div>

<div class="trayectoria">
    <img src="img/historia.jpg" alt="">
</div>

@include('partials.contact-form')
@include('partials.address')
@endsection
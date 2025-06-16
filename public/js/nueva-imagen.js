// Inicialización de GSAP
gsap.registerPlugin();

// Elementos del DOM
const floatingWidget = document.getElementById('floatingWidget');
const closeWidget = document.getElementById('closeWidget');
const conoceBtn = document.getElementById('conoceBtn');
const videoModal = document.getElementById('videoModal');
const modalClose = document.getElementById('modalClose');
const videoPlayer = document.getElementById('videoPlayer');

// Animación de entrada del widget
gsap.to(floatingWidget, {
    scale: 1,
    opacity: 1,
    duration: 0.8,
    ease: "back.out(1.7)",
    delay: 1
});

// Función para cerrar el widget
function closeWidgetFunction() {
    gsap.to(floatingWidget, {
        scale: 0,
        opacity: 0,
        rotation: 180,
        duration: 0.5,
        ease: "back.in(1.7)",
        onComplete: () => {
            floatingWidget.style.display = 'none';
        }
    });
}

// Función para abrir el modal de video
function openVideoModal() {
    // Mostrar modal
    videoModal.classList.add('active');

    // Animar entrada
    gsap.fromTo(videoModal,
        { opacity: 0 },
        { opacity: 1, duration: 0.3, ease: "power2.out" }
    );

    gsap.fromTo('.video-container',
        { scale: 0.8, opacity: 0 },
        { scale: 1, opacity: 1, duration: 0.5, ease: "back.out(1.7)", delay: 0.1 }
    );

    // Reproducir video automáticamente (opcional)
    setTimeout(() => {
        videoPlayer.play().catch(e => {
            console.log('Autoplay prevented:', e);
        });
    }, 500);

    // Prevenir scroll del body
    document.body.style.overflow = 'hidden';
}

// Función para cerrar el modal de video
function closeVideoModal() {
    // Pausar video
    videoPlayer.pause();
    videoPlayer.currentTime = 0;

    // Animar salida
    gsap.to('.video-container', {
        scale: 0.8,
        opacity: 0,
        duration: 0.3,
        ease: "back.in(1.7)"
    });

    gsap.to(videoModal, {
        opacity: 0,
        duration: 0.4,
        ease: "power2.in",
        delay: 0.1,
        onComplete: () => {
            videoModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    });
}

// Event listeners
closeWidget.addEventListener('click', closeWidgetFunction);
conoceBtn.addEventListener('click', openVideoModal);
modalClose.addEventListener('click', closeVideoModal);

// Cerrar modal al hacer click fuera del video
videoModal.addEventListener('click', (e) => {
    if (e.target === videoModal) {
        closeVideoModal();
    }
});

// Cerrar modal con tecla ESC
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && videoModal.classList.contains('active')) {
        closeVideoModal();
    }
});

// Efectos hover adicionales con GSAP
floatingWidget.addEventListener('mouseenter', () => {
    gsap.to(floatingWidget, {
        scale: 1.05,
        duration: 0.3,
        ease: "power2.out"
    });
});

floatingWidget.addEventListener('mouseleave', () => {
    gsap.to(floatingWidget, {
        scale: 1,
        duration: 0.3,
        ease: "power2.out"
    });
});

// Función para cargar tu video (llama esta función con la URL de tu video)
function loadVideo(videoUrl) {
    const sources = videoPlayer.querySelectorAll('source');
    sources.forEach(source => {
        if (source.src.includes('.mp4')) {
            source.src = videoUrl;
        }
    });
    videoPlayer.load(); // Recargar el video con la nueva fuente
}

// Ejemplo de uso (descomenta y cambia la URL):
// loadVideo('https://tu-servidor.com/tu-video.mp4');

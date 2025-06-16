document.addEventListener('DOMContentLoaded', function () {
    const puzzle = document.getElementById('puzzle');
    const placeholder = document.getElementById('placeholder');

    // Definición de las piezas del rompecabezas con sus colores, posiciones y rotaciones específicas
    const pieces = [
        { id: '01', x: 379, y: 175, color: 'orange', rotation: 45, isActive: false, value: 'Esperanza' },
        { id: '02', x: 420, y: 105, color: 'red', rotation: 136, isActive: false, value: 'Pasión' },
        { id: '03', x: 488, y: 146, color: 'green', rotation: 225, isActive: false, value: 'Sabiduría' },
        { id: '04', x: 544, y: 105, color: 'cyan', rotation: 136, isActive: false, value: 'Creatividad' },
        { id: '05', x: 615, y: 148, color: 'blue', rotation: 225, isActive: false, value: 'Dignidad' },
        { id: '06', x: 670, y: 108, color: 'purple', rotation: 136, isActive: false, value: 'Libertad' },
        { id: '07', x: 740, y: 150, color: 'red', rotation: 225, isActive: false, value: 'Amor' }
    ];

    // Crear las piezas del rompecabezas
    pieces.forEach((piece, index) => {
        // Crear el contenedor para la pieza
        const container = document.createElement('div');
        container.className = 'puzzle__piece-container';
        container.style.position = 'absolute';
        container.style.left = `${piece.x}px`;
        container.style.top = `${piece.y}px`;
        container.style.transform = `rotate(${piece.rotation}deg)`;
        container.style.setProperty('--rotation', `${piece.rotation}deg`);
        container.style.transformOrigin = 'center center';
        container.style.width = '120px';
        container.style.height = '120px';
        container.style.zIndex = '10';
        puzzle.appendChild(container);

        // Crear el SVG para la pieza
        const svgNS = 'http://www.w3.org/2000/svg';
        const pieceElement = document.createElementNS(svgNS, 'svg');
        pieceElement.setAttribute('class', `puzzle__piece puzzle__piece--${piece.color}`);
        pieceElement.setAttribute('viewBox', '0 0 24 20');

        // Definir la forma de la pieza de rompecabezas
        const path = document.createElementNS(svgNS, 'path');
        path.setAttribute('d', createPuzzlePiecePath());
        path.setAttribute('class', 'puzzle__piece-path');
        pieceElement.appendChild(path);

        container.appendChild(pieceElement);

        // Crear y posicionar el número (rotado de vuelta para que se vea derecho)
        const numberElement = document.createElement('div');
        numberElement.textContent = piece.id;
        numberElement.className = 'puzzle__number';
        numberElement.style.transform = `rotate(${-piece.rotation}deg)`;
        container.appendChild(numberElement);

        // Añadir evento click para cambiar color y mostrar valor
        container.addEventListener('click', function () {
            // Ocultar todas las descripciones primero
            document.querySelectorAll('.value-description').forEach(desc => {
                desc.classList.remove('active');
            });

            if (pieces[index].isActive) {
                // Desactivar: quitar clase active (volver al color más claro)
                pieceElement.classList.remove('active');
                pieces[index].isActive = false;

                // Mostrar placeholder
                if (placeholder) {
                    placeholder.style.display = 'block';
                }
            } else {
                // Desactivar todas las otras piezas
                pieces.forEach((p, i) => {
                    if (i !== index && p.isActive) {
                        const otherContainer = puzzle.children[i];
                        const otherPiece = otherContainer.querySelector('.puzzle__piece');
                        otherPiece.classList.remove('active');
                        p.isActive = false;
                    }
                });

                // Activar: añadir clase active (color más oscuro)
                pieceElement.classList.add('active');
                pieces[index].isActive = true;

                // Ocultar placeholder y mostrar descripción correspondiente
                if (placeholder) {
                    placeholder.style.display = 'none';
                }
                const valueDescription = document.getElementById(`value-${piece.id}`);
                if (valueDescription) {
                    valueDescription.classList.add('active');
                }
            }
        });
    });

    // Función para crear una forma de pieza de rompecabezas
    function createPuzzlePiecePath() {
        return `
                    M 0 0 L 8 0 C 9 1 7 2 7 3 C 7 7 12 5 10 2 C 9 0 10 0 10 0 L 18 0 L 18 8 C 19 9 19 9 20 8 C 20 8 22 7 23 9 C 22 13 19 9 18 10 L 18 18 L 10 18 C 9 17 13 14 9 13 C 5 14 9 17 8 18 L 0 18 L 0 10 C 0 10 0 10 0 10 C -1 9 -2 12 -4 10 C -4 10 -5 9 -4 8 C -2 6 -1 9 0 8 L 0 0
                `;
    }
});
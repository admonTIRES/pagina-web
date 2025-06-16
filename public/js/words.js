const container = document.getElementById('words');
let containerRect = container.getBoundingClientRect();

// Physics properties
const physics = {
  repelForce: 50,
  damping: 0.95,
  minDistance: 80
};

// Word data with text and colors
const words = [
  { text: "Desempeño", color: "red", width: 30, height: 14, rotation: 16 },
  { text: "Innovación", color: "blue", width: 28, height: 12, rotation: 5 },
  { text: "Tecnología", color: "green", width: 32, height: 10, rotation: -16 },
  { text: "Valor agregado", color: "transparent", width: 35, height: 11, rotation: 8 },
  { text: "Competencias", color: "transparent", width: 33, height: 9, rotation: 16 },
  { text: "Habilidades", color: "green", width: 27, height: 14, rotation: 6 },
  { text: "Soluciones", color: "red", width: 29, height: 12, rotation: 16 },
  { text: "Compromiso", color: "blue", width: 31, height: 10, rotation: 16 },
  { text: "Pasión", color: "green", width: 25, height: 8, rotation: 16 },
  { text: "Calidad", color: "red", width: 26, height: 9, rotation: 7 },
  { text: "Confiabilidad", color: "blue", width: 34, height: 11, rotation: -4 }
];

// Word objects to store physics data
const wordObjects = [];

// Create and position words
words.forEach((word, index) => {
  const wordElement = document.createElement('div');
  wordElement.className = `word ${word.color}`;
  wordElement.textContent = word.text;

  // Calculate a good position for the word
  const row = Math.floor(index / 4);
  const col = index % 4;

  const rowCount = Math.ceil(words.length / 4);
  const cellHeight = 100 / rowCount;
  const cellWidth = 100 / 4;

  const baseX = cellWidth * col + (cellWidth - word.width) / 2;
  const baseY = cellHeight * row + (cellHeight - word.height) / 2;

  // Add some randomness to position
  const randX = baseX + (Math.random() * 10 - 5);
  const randY = baseY + (Math.random() * 10 - 5);

  // Set initial position
  wordElement.style.left = `${randX}%`;
  wordElement.style.top = `${randY}%`;
  wordElement.style.transform = `rotate(${word.rotation}deg) scale(0.5)`;

  container.appendChild(wordElement);

  // Create word object with physics properties
  const wordObj = {
    element: wordElement,
    x: (randX / 100) * containerRect.width,
    y: (randY / 100) * containerRect.height,
    vx: 0, // velocity x
    vy: 0, // velocity y
    width: wordElement.offsetWidth,
    height: wordElement.offsetHeight,
    rotation: word.rotation,
    isDragging: false,
    vibrationTl: null
  };

  wordObjects.push(wordObj);
});

// Animate link icons
const linkIcons = document.querySelectorAll('.link-icon');
gsap.to(linkIcons, {
  opacity: 0.7,
  duration: 1,
  stagger: 0.2,
  ease: "power2.out",
  delay: 1.5
});

// Entry animation sequence for words
function animateWordsEntry() {
  return gsap.timeline()
    .to(wordObjects.map(obj => obj.element), {
      opacity: 1,
      scale: 1,
      duration: 0.8,
      rotation: words.map(word => word.rotation),
      stagger: 0.15,
      ease: "back.out(1.7)",
      onComplete: function () {
        // Start physics and vibration after entry animations
        startPhysicsSystem();
        wordObjects.forEach((obj, i) => {
          createVibrationAnimation(obj, words[i].rotation);
          createDraggable(obj, words[i]);
        });
      }
    });
}

// Start the entry animation
window.addEventListener('DOMContentLoaded', () => {
  setTimeout(() => {
    animateWordsEntry();
  }, 300);
});

// Physics system
function startPhysicsSystem() {
  function updatePhysics() {
    containerRect = container.getBoundingClientRect();

    // Check collisions and apply forces
    for (let i = 0; i < wordObjects.length; i++) {
      const objA = wordObjects[i];
      if (objA.isDragging) continue;

      for (let j = i + 1; j < wordObjects.length; j++) {
        const objB = wordObjects[j];

        // Calculate distance between centers
        const dx = objB.x - objA.x;
        const dy = objB.y - objA.y;
        const distance = Math.sqrt(dx * dx + dy * dy);

        // Check if objects are too close
        if (distance < physics.minDistance && distance > 0) {
          // Calculate repulsion force
          const force = (physics.minDistance - distance) / physics.minDistance * physics.repelForce;

          // Normalize direction vector
          const fx = (dx / distance) * force;
          const fy = (dy / distance) * force;

          // Apply forces (opposite directions)
          if (!objA.isDragging) {
            objA.vx -= fx * 0.5;
            objA.vy -= fy * 0.5;
          }
          if (!objB.isDragging) {
            objB.vx += fx * 0.5;
            objB.vy += fy * 0.5;
          }
        }
      }

      // Apply damping
      objA.vx *= physics.damping;
      objA.vy *= physics.damping;

      // Update position
      objA.x += objA.vx;
      objA.y += objA.vy;

      // Keep within bounds
      const margin = 10;
      if (objA.x < margin) {
        objA.x = margin;
        objA.vx *= -0.5;
      }
      if (objA.x > containerRect.width - objA.width - margin) {
        objA.x = containerRect.width - objA.width - margin;
        objA.vx *= -0.5;
      }
      if (objA.y < margin) {
        objA.y = margin;
        objA.vy *= -0.5;
      }
      if (objA.y > containerRect.height - objA.height - margin) {
        objA.y = containerRect.height - objA.height - margin;
        objA.vy *= -0.5;
      }

      // Update DOM position
      if (!objA.isDragging) {
        gsap.set(objA.element, {
          x: objA.x - (objA.element.offsetLeft),
          y: objA.y - (objA.element.offsetTop)
        });
      }
    }

    requestAnimationFrame(updatePhysics);
  }

  updatePhysics();
}

// Create draggable functionality with physics integration
function createDraggable(wordObj, wordData) {
  Draggable.create(wordObj.element, {
    type: "x,y",
    bounds: container,
    edgeResistance: 0.65,
    onDragStart: function () {
      wordObj.isDragging = true;
      // Stop physics velocities
      wordObj.vx = 0;
      wordObj.vy = 0;

      // Pause vibration
      if (wordObj.vibrationTl) {
        wordObj.vibrationTl.pause();
      }

      // Scale up
      gsap.to(this.target, {
        scale: 1.1,
        boxShadow: "0 8px 16px rgba(0,0,0,0.3)",
        duration: 0.2
      });
    },
    onDrag: function () {
      // Update physics position during drag
      const rect = this.target.getBoundingClientRect();
      const containerRect = container.getBoundingClientRect();
      wordObj.x = rect.left - containerRect.left + rect.width / 2;
      wordObj.y = rect.top - containerRect.top + rect.height / 2;
    },
    onDragEnd: function () {
      wordObj.isDragging = false;

      // Scale back
      gsap.to(this.target, {
        scale: 1,
        boxShadow: "0 4px 8px rgba(0,0,0,0.2)",
        duration: 0.3
      });

      // Resume vibration
      if (wordObj.vibrationTl) {
        wordObj.vibrationTl.resume();
      }

      // Add some release velocity for more realistic physics
      wordObj.vx = this.deltaX * 0.3;
      wordObj.vy = this.deltaY * 0.3;
    }
  });
}

// Function to create subtle vibration animation
function createVibrationAnimation(wordObj, baseRotation) {
  const xAmount = 0.3 + Math.random() * 0.5;
  const yAmount = 0.3 + Math.random() * 0.5;
  const rotAmount = 0.5 + Math.random() * 1;
  const duration = 0.8 + Math.random() * 0.4;

  const tl = gsap.timeline({
    repeat: -1,
    yoyo: true
  });

  tl.to(wordObj.element, {
    x: `+=${xAmount}`,
    y: `+=${yAmount}`,
    rotation: baseRotation + rotAmount,
    duration: duration,
    ease: "sine.inOut"
  })
    .to(wordObj.element, {
      x: `-=${xAmount * 2}`,
      y: `-=${yAmount * 2}`,
      rotation: baseRotation - rotAmount,
      duration: duration * 2,
      ease: "sine.inOut"
    })
    .to(wordObj.element, {
      x: `+=${xAmount}`,
      y: `+=${yAmount}`,
      rotation: baseRotation,
      duration: duration,
      ease: "sine.inOut"
    });

  wordObj.vibrationTl = tl;
  return tl;
}

// Handle window resize
window.addEventListener('resize', () => {
  containerRect = container.getBoundingClientRect();

  // Update word object positions relative to new container size
  wordObjects.forEach(obj => {
    const rect = obj.element.getBoundingClientRect();
    obj.x = rect.left - containerRect.left + rect.width / 2;
    obj.y = rect.top - containerRect.top + rect.height / 2;
    obj.width = obj.element.offsetWidth;
    obj.height = obj.element.offsetHeight;
  });
});
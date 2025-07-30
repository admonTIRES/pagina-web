<div class="contact" id="CONTACTANOS_ID">
  <div class="contact__data">
    <div>
      <h2 class="contact__title">Contáctanos</h2>
    </div>

    <form method="POST" action="{{ route('contacto.store') }}" enctype="multipart/form-data" id="FORM_CONTACTO">
      @csrf

      <label class="contact__input">Nombre:</label>
      <input type="text" name="NOMBRE" id="NOMBRE" required>

      <label>Correo electrónico:</label>
      <input type="email" name="CORREO" id="CORREO" required>

      <label>Número de teléfono:</label>
      <input type="tel" name="TELEFONO" id="TELEFONO" required>

      <label>Mensaje:</label>
      <textarea name="MENSAJE" id="MENSAJE" rows="5" required></textarea>

      <button type="submit" class="btn btn-success" id="guardarCONTACTO">Enviar</button>
    </form>

  </div>

  <div class="contact__image">
    <img src="img/socios.png" alt="">
  </div>
</div>





<script>
  document.getElementById("FORM_CONTACTO").addEventListener("submit", async function(e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);

    // Validación simple
    if (!form.NOMBRE.value.trim() || !form.CORREO.value.trim() || !form.TELEFONO.value.trim() || !form.MENSAJE.value.trim()) {
      Swal.fire('Faltan datos', 'Por favor, complete todos los campos.', 'error');
      return;
    }

    Swal.fire({
      title: '¿Desea guardar la información?',
      text: '',
      icon: 'question',
      showCancelButton: true,
      confirmButtonText: 'Sí, guardar',
      cancelButtonText: 'Cancelar',
      allowOutsideClick: false
    }).then(async (result) => {
      if (result.isConfirmed) {
        try {
          const response = await fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
              'Accept': 'application/json'
            }
          });

          const data = await response.json();

          if (data.success) {
            Swal.fire('¡Guardado!', 'La información fue registrada correctamente.', 'success');
            form.reset();
          } else {
            Swal.fire('Error', 'Ocurrió un error al guardar.', 'error');
          }

        } catch (error) {
          console.error(error);
          Swal.fire('Error', 'No se pudo conectar con el servidor.', 'error');
        }
      }
    });
  });
</script>
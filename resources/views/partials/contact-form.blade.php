

<div class="contact" id="CONTACTANOS_ID">
  <div class="contact__data">
    <div>
      <h2 class="contact__title">Contáctanos</h2>
    </div>

    <form method="POST" action="{{ route('contacto.store') }}" enctype="multipart/form-data" id="FORM_CONTACTO" novalidate>
      @csrf

      <!-- Honeypot: fuera de vista (mejor que display:none) -->
      <input type="text" name="website" id="website" autocomplete="off"
        tabindex="-1" aria-hidden="true"
        style="position:absolute; left:-10000px; top:auto; width:1px; height:1px; overflow:hidden;">

      <!-- Timestamp -->
      <input type="hidden" name="form_started_at" value="{{ now()->timestamp }}">

      <!-- Token insertado por JS -->
      <input type="hidden" name="token_js" id="token_js" value="">

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
  document.addEventListener("DOMContentLoaded", function() {
    document.cookie = "contacto_token=1; path=/; SameSite=Lax";
    const t = document.getElementById('token_js');
    if (t) t.value = "1";
  });

  document.getElementById("FORM_CONTACTO").addEventListener("submit", async function(e) {
    e.preventDefault();

    const form = e.target;

    if (!form.NOMBRE.value.trim() || !form.CORREO.value.trim() || !form.TELEFONO.value.trim() || !form.MENSAJE.value.trim()) {
      Swal.fire('Faltan datos', 'Por favor, complete todos los campos.', 'error');
      return;
    }

    Swal.fire({
      title: '¿Desea enviar la información?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonText: 'Sí, enviar',
      cancelButtonText: 'Cancelar',
      allowOutsideClick: false
    }).then(async (result) => {
      if (result.isConfirmed) {
        try {
          const formData = new FormData(form);

          const response = await fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
              'Accept': 'application/json'
            },
            credentials: 'include' 
          });

          const data = await response.json();

          if (response.ok && data.success) {
            Swal.fire('¡Enviado!', 'Tu mensaje fue registrado correctamente.', 'success');
            form.reset();
          } else {
            Swal.fire('Error', data.message || 'Ocurrió un error al enviar.', 'error');
          }

        } catch (error) {
          Swal.fire('Error', 'No se pudo conectar con el servidor.', 'error');
        }
      }
    });
  });
</script>




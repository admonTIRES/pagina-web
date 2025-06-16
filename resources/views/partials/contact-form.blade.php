<div class="contact">
  <div class="contact__data">
    <div>
      <h2 class="contact__title">Contáctanos</h2>
    </div>

    @if (session('success'))
    <div class="success">{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('contacto.enviar') }}">
      @csrf
      <label class="contact__input">Nombre:</label>
      <input type="text" name="nombre" value="{{ old('nombre') }}" required>
      @error('nombre') <div class="error">{{ $message }}</div> @enderror

      <label>Correo electrónico:</label>
      <input type="email" name="correo" value="{{ old('correo') }}" required>
      @error('correo') <div class="error">{{ $message }}</div> @enderror

      <label>Número de teléfono:</label>
      <input type="tel" name="telefono" value="{{ old('telefono') }}" required pattern="[0-9]{10}">
      @error('telefono') <div class="error">{{ $message }}</div> @enderror

      <label>Mensaje:</label>
      <textarea name="mensaje" required>{{ old('mensaje') }}</textarea>
      @error('mensaje') <div class="error">{{ $message }}</div> @enderror

      <button type="submit">Enviar</button>
    </form>
  </div>

  <div class="contact__image">
    <img src="img/socios.png" alt="">
  </div>
</div>
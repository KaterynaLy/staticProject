<!-- formulario.php -->
<form id="contactForm" action="procesar_formulario.php" method="post" style="display: none;">
    <input type="hidden" name="interes" value="Estoy interesado/interesada">
    <input type="text" name="nombre" placeholder="Nombre *" required><br>
    <input type="tel" name="telefono" placeholder="Teléfono *" required><br>
    <input type="email" name="email" placeholder="Email (opcional)"><br>
    <textarea name="mensaje" rows="4" placeholder="Mensaje"></textarea><br>
    <label for="fecha">Fecha y hora para llamar (opcional):</label><br>
    <input type="datetime-local" name="fecha" id="fecha"><br>
    <label>
        <input type="checkbox" name="accept_privacy" required> He leído y acepto la <a href="./privacy.html" target="_blank">política de privacidad</a>.
    </label><br>
    <input type="submit" value="Contactarme, por favor">
</form>
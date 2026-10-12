document.getElementById('inscripcionForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Evita que la página recargue o cambie de ruta

    let formulario = this;
    let datosFormulario = new FormData(formulario);

    let botonEnviar = formulario.querySelector('.btn-submit');
    let textoOriginal = botonEnviar.textContent;
    botonEnviar.textContent = "Enviando...";
    botonEnviar.disabled = true;

    // Envía los datos al archivo PHP por debajo (AJAX)
    fetch('php/enviar.php', {
        method: 'POST',
        body: datosFormulario
    })
    .then(response => {
        botonEnviar.textContent = textoOriginal;
        botonEnviar.disabled = false;

        if (response.ok) {
            // Tu alerta emergente exacta de éxito
            Swal.fire({
                title: '¡Enviado con éxito!',
                text: 'Los datos de tu inscripción se han registrado correctamente.',
                icon: 'success',
                confirmButtonText: 'Aceptar',
                confirmButtonColor: '#16a34a'
            });

            formulario.reset(); // Limpia los campos del formulario
        } else {
            throw new Error("Error en el servidor");
        }
    })
    .catch(error => {
        botonEnviar.textContent = textoOriginal;
        botonEnviar.disabled = false;

        // Tu alerta emergente exacta de error (la de la "X")
        Swal.fire({
            title: 'Oops...',
            text: 'Hubo un problema al enviar tu mensaje. Por favor inténtalo de nuevo.',
            icon: 'error',
            confirmButtonText: 'Reintentar',
            confirmButtonColor: '#2563eb'
        });
    });
});
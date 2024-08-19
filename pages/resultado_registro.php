<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Registro</title>
    <link rel="stylesheet" href="../css/resultado_registro.css">
    <!-- <script src="../js/resultado_registro.js" defer></script> -->
</head>
<body>
    <div id="popup" class="popup hidden">
        <div class="popup-content">
            <span id="popup-message"></span>
            <button id="close-popup">Cerrar</button>
        </div>
    </div>

    <script>
        // Obtén el parámetro 'status' de la URL
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');

        // Define los mensajes y el tipo de popup basado en el parámetro 'status'
        const popup = document.getElementById('popup');
        const message = document.getElementById('popup-message');
        
        if (status === 'success') {
            message.textContent = 'Usuario registrado correctamente!';
            popup.classList.add('success');
        } else if (status === 'error') {
            message.textContent = 'Ha ocurrido un error. Intenta nuevamente.';
            popup.classList.add('error');
        }
        
        // Muestra el popup
        popup.classList.remove('hidden');

        // Cierra el popup cuando se hace clic en el botón 'Cerrar'
        document.getElementById('close-popup').addEventListener('click', function() {
            popup.classList.add('hidden');
        });
    </script>
</body>
</html>

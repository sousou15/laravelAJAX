<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página con Botón</title>
    <!-- Incluye jQuery (puedes usar una CDN como en el ejemplo) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <button id="botonAjax">Hacer petición</button>
    <div id ="contenido"></div>
    <script>
        $(document).ready(function () {
            $('#botonAjax').click(function () {
                // Hacer la petición Ajax
                $.ajax({
                    type: 'GET',
                    url: 'http://127.0.0.1:8000/botellas',
                    success: function (response) {
                        // Manipular la respuesta exitosa aquí
                        $('#contenido').html(`
                            <h1>${response.mensaje}</h1>
                            <ul>
                                ${response.datos.map(dato => `<li>${dato}.</li>`).join('')}
                            </ul>
                        `);
                    },
                    error: function (response) {
                        // Manipular la respuesta de error aquí
                        alert('Error:', response);
                    }
                });
            });
        });
    </script>

</body>
</html>

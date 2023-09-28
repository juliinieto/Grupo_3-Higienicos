<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Hospital Privado</title>
</head>
<body>
<footer>
    <div id="info-hospital">
        <h3>Información de Contacto</h3>
        <p>Teléfono: +123 456 789</p>
        <p>Correo Electrónico: info@hospitalprivado.com</p>
        <p>Dirección: Calle Hospital, Ciudad, País</p>
    </div>
    <div id="redes-sociales">
        <h3>Síguenos en Redes Sociales</h3>
        <a href="#"><img src="facebook.png" alt="Facebook"></a>
        <a href="#"><img src="twitter.png" alt="Twitter"></a>
        <a href="#"><img src="instagram.png" alt="Instagram"></a>
    </div>
</footer>
<script>
        function toggleMenu() {
            var menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }

        document.getElementById("filtroServicios").addEventListener("change", function() {
            var seleccion = this.value;
            var servicios = document.querySelectorAll(".service");
            
            for (var i = 0; i < servicios.length; i++) {
                var servicio = servicios[i];
                
                if (seleccion === "todos" || servicio.id === seleccion) {
                    servicio.style.display = "block";
                } else {
                    servicio.style.display = "none";
                }
            }
        });
    </script>
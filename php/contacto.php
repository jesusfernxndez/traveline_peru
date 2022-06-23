<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conctacto| Traveline Perú</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/contactos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f2b598c953.js" crossorigin="anonymous"></script>

</head>
<body>
    <?php include './includes/Navbar.php'; ?>
    <section>
        <!-- Seccion de contacto - inicio -->
    <div class="seccion-contacto">
        <div class="seccion-info" style="color: black;">
            
            <div><i class="fa-solid fa-location-dot"></i>Lima, Lima, Los Olivos</div>
            <div><i class="fas fa-envelope"></i>Traveline.peru@gmail.com</div>
            <div><i class="fas fa-phone"></i>+51 980954545</div>
            <div><i class="fa-regular fa-calendar"></i>Lun - Sab 8:00 AM a 11:00 PM</div>
        </div>
        <div class="formulario">
            <h2 style="color: black;">Contactame</h2>
            <form class="contacto" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="Ingrese su nombre">
                <input type="email" name="email" class="text-box" placeholder="Ingrese su correo"> <br>
                <textarea name="message" rows="5" class="text-area"placeholder="Escribe tu mensaje"></textarea>
                <input type="button" name="submit" class="send-btn" value="Enviar" onclick="alert('¡Mensaje enviado satisfactoriamente! Gracias por contactarnos.')">
            </form>
        </div>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.0373612365756!2d-77.06585250107379!3d-11.971915187663905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cf2924f6aa03%3A0x186e1f5b58135e26!2sTerminal%20Terrestre%20Naranjal!5e0!3m2!1ses!2spe!4v1651706622758!5m2!1ses!2spe"  width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- Seccion de contacto - final -->
    </section>

    
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="../img/logo1.jpg" alt="Logo Traveline">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>DESARROLLO WEB GRUPO N°4</h2>
                <div>
                        <p>Jordan Quilia Valerio    - U20244821</p>
                        <p>Rubén Vera Santillana    - U19311142</p>
                        <p>Joel Quispe Ricardo      - U19311142</p>
                        <p>Elías Maguiña Lugo       - U19206693</p>
                        <p>Luis Lucero Santiago     - U18209048</p>
                </div>
               
                
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/UTP.Peru" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/universidadutp/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/UTP_PERU" class="fa fa-twitter"></a>
                    <a href="https://www.youtube.com/c/UniversidadTecnol%C3%B3gicadelPer%C3%BAUTP" class="fa fa-youtube"></a>
                </div>
                
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Traveline Perú</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</body>
</html>
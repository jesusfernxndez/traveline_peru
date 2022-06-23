<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro| Traveline Perú</title>
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/contactos.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/f2b598c953.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <?php include './includes/Navbar.php'; ?>
        <?php
        session_start();

        if (isset($_SESSION["mensaje"])) {
            $msg = $_SESSION["mensaje"];
            session_destroy();
            
            echo "<script>alert('.$msg.')</script>";
        }
        ?>


        <div class="seccion-contacto" >
            <div class="seccion-info">
                <center><img src="../img/n1.png" style="width: 420px;height: 400px;"></center>
            </div>

            <div class="formulario">
                <h2 style="color: black;">Registra Nueva Cuenta</h2>
                <form class="contacto" action="php/ControlUsuario.php" method="post">
                    <input type="text" name="name" class="text-box" placeholder="Ingrese su nombre" style="width: 100%;" required=""><br>
                    <input type="email" name="email" class="text-box" placeholder="Ingrese su correo" style="width: 100%;" required=""> <br>
                    <input type="password" name="pass" class="text-box" placeholder="Ingrese su contraseña" style="width: 100%;" required=""> <br>
                    <input type="hidden" name="accion" value="registro">
                    <input type="submit" name="submit" class="send-btn" value="Registrarse" >
                </form>
            </div>
        </div>

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
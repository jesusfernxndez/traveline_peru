<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Equipo| Traveline Perú</title>
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/equipo.css">
        <script src="../js/equipo.js""></script>

    </head>
    <body>
        <?php include './includes/Navbar.php'; ?>
        <section>
            <body style="background-image:url(../img/fondo.jpg) ;">

                <fieldset style="background-image: url(../img/bgplaya.jpg) ;" class="Equipo" src="../TRAVELINE_PERU/js/equipo.js">


                    <legend class="nombre "> Jordan Quilla Valerio</legend><br>
                    <img src="../img/Jordan.jpg" alt="" witdh="800" height="400" >
                    <legend  class="codigo">U19206693 - Lima-Norte </legend >

                    <div> 
                        <button type="button" onclick="iNT1()"> BIOGGRAFIA </button>

                    </div>

                </fieldset > <br><br>
                <fieldset class="Equipo1 " style="background-image: url(../img/lagobg.jpg) ;">
                    <legend class="nombre">Joel Ronaldo Quispe Ricardo</legend>   <br>
                    <img src="../img/joel.jpeg" alt="" witdh="800" height="400">
                    <legend class="codigo">U19311142 - Lima-Sur</legend><br>
                    <div>
                        <button type="button" onclick="iNT2()">BIOGGRAFIA</button>

                    </div>

                </fieldset> <br><br>
                <fieldset class="Equipo2 " style="background-image: url(../img/puentebg.jpg);">
                    <legend class="nombre">Elias Josue Maguiña Lugo</legend>  <br>
                    <img src="../img/elias.jpeg" alt="" witdh="800" height="400" >
                    <legend class="codigo">U19206693 - Lima-Norte</legend>
                    <div>
                        <button type="button" onclick="iNT3()">BIOGGRAFIA</button>

                    </div>

                </fieldset> <br><br>

                <fieldset class="Equipo3 " style="background-image: url(../img/parquebg.jpg);">
                    <legend class="nombre">Ruben Antonio Vera Santillana</legend>    <br>
                    <img src="../img/rav.png" alt="" witdh="800" height="400" >
                    <legend class="codigo ">U19311672 - Lima-Norte</legend>
                    <div>
                        <button type="button" onclick="iNT4()">BIOGGRAFIA</button>
                    </div>  

                </fieldset> 





            </body>
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
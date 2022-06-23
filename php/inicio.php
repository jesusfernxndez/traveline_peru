<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio| Traveline Perú</title>

        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/estilo.slide.css">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/cuerpoinicio.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
        <!-- chatbot -->
        <script SameSite="None; Secure" src=  'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';></script>

        <script>
            var myLandbot = new Landbot.Livechat({
                configUrl: 'https://landbot.site/v3/H-1276081-03P97AFHDYXZ7JOB/index.json',
            });
        </script>
        <!-- chat bot -->
    </head>
    <body>
        <?php include './includes/Navbar.php'; ?>
        <div class="cuerpo">
            <div class="container-all">

                <input type="radio" id="1" name="image-slide" hidden/>
                <input type="radio" id="2" name="image-slide" hidden/>
                <input type="radio" id="3" name="image-slide" hidden/>

                <div class="slide">

                    <div class="item-slide">
                        <img src="../img/slide1.jpg">
                    </div>

                    <div class="item-slide">
                        <img src="../img/slide2.jpg">
                    </div>

                    <div class="item-slide">
                        <img src="../img/slide3.jpg">
                    </div>

                </div>

                <div class="pagination">

                    <label class="pagination-item" for="1">
                        <img src="../img/slide1.jpg">
                    </label>

                    <label class="pagination-item" for="2">
                        <img src="../img/slide2.jpg">
                    </label>

                    <label class="pagination-item" for="3">
                        <img src="../img/slide3.jpg">
                    </label>

                </div>

            </div>
        </div>


        <section >

            <div class="grupo-caja">
                <div class="caja">
                    <figure>
                        <img src="../img/oferta1.jpg" alt="Logo Traveline">
                    </figure>

                    <h2>OFERTA #1</h2>
                    <P class="parrafo">No creemos que haya una persona que no quiera conocer uno de los 7 lugares considerados maravillas en el mundo. Machu Picchu fue elegida una de las 7 maravillas del mundo en 2007. Sus construcciones son únicas en el planeta y encierran uno de los misterios más grandes de la antigüedad, nadie puede explicar cómo es que pudieron construir Machu Picchu con las herramientas que se ven en el museo de Machu Picchu</P>
                </div>
                <div class="caja">
                    <figure>
                        <img src="../img/oferta2.jpg" alt="Logo Traveline">
                    </figure>
                    <h2>OFERTA #2</h2>
                    <P class="parrafo">La visita a la Laguna de Llanganuco es uno de los atractivos turísticos más visitados en Ancash. En este ambiente no solo disfrutarás de las aguas turquezas de la laguna, también lo enriquecen y complementan el paisaje como son los queuñales de alrededores. De igual manera se puede disfrutar de la flora y fauna del lugar. La Laguna de Llanganuco es una de las pocas lagunas que están por debajo de los 4000 m.s.n.m, lo cual lo hace ideal para visitarlo en familia.</P>

                </div>
                <div class="caja">
                    <figure>
                        <img src="../img/oferta3.jpeg" alt="Logo Traveline">
                    </figure>
                    <h2>OFERTA #3</h2>
                    <P class="parrafo">En Piura también puedes darte un baño en zonas de agua dulce. Uno de estos lugares es la Catarata de Caracucho, una caída en la que liberarte del sofocante calor que caracteriza al departamento de Piura.
                        Uno de los puntos entretenidos de este lugar es que para llegar hasta él hay que hacer una caminata de alrededor de dos horas a través del bosque Piedra de Toro, caracterizado por su verde vegetación y por sus curiosas piedras con forma de animales</P>
                </div>
            </div>
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
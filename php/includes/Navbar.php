<nav class="header">
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <a href="#" class="enlace">
        <img src="../img/logo.jpg" alt="" class="logo">
    </a>
    <ul>
        <li><a class="<?php if (basename($_SERVER["REQUEST_URI"]) == 'inicio.php') echo "active"; ?>" href="inicio.php">Inicio</a></li>
        <li><a class="<?php if (basename($_SERVER["REQUEST_URI"]) == 'nosotros.php') echo "active"; ?>" href="nosotros.php">Nosotros</a></li>
        <li><a class="<?php if (basename($_SERVER["REQUEST_URI"]) == 'servicios.php') echo "active"; ?>" href="servicios.php">Servicios</a></li>
        <li><a class="<?php if (basename($_SERVER["REQUEST_URI"]) == 'equipo.php') echo "active"; ?>" href="equipo.php">Equipo</a></li>
        <li><a class="<?php if (basename($_SERVER["REQUEST_URI"]) == 'contacto.php') echo "active"; ?>" href="contacto.php">Contacto</a></li>
        <li><a class="<?php if (basename($_SERVER["REQUEST_URI"]) == 'registro.php') echo "active"; ?>" href="registro.php">Registro</a></li>
    </ul>
</nav>

<?php
session_start();
include './Conexion.php';

$accion = $_REQUEST["accion"];


if ($accion == "registro") {
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $cn = new Conexion();
    $sql = "insert into Usuario(nombre,correo,password) values('$nombre','$email','$pass')";
    $res = mysqli_query($cn->getConnection(), $sql) or die(mysqli_error($cn->getConnection()));
    if ($res){
        $_SESSION["mensaje"] = "Cuenta registrada correctamente";
    }else{
         $_SESSION["mensaje"] = "Lo sentimos no se ha podido registrar cuenta";
    }

    header("location: ../registro.php");
}
?>
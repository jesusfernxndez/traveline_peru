<?php

class Conexion {

    private $cn = null;

    function getConnection() {
        if ($this->cn == null) {
            $this->cn = mysqli_connect("localhost", "root", "", "bd_TravelinePeru");
        }
        return $this->cn;
    }

}

?>

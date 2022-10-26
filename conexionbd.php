<?php 
class ConexionBD {

    private $conexion;

    function __construct() {

        require("../configuraciones/configuracion.php");
        $this->conexion = mysqli_connect($servidor, $usuario, 
        $contraseña,$baseDatos,$puerto);

    }

    public  function getConexion() {

        return $this->conexion;

    }


}

?>
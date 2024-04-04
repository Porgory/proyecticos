<?php

class ConexionBD {
    private $servidor;
    private $baseDeDatos;
    private $usuario;
    private $contrasenia;
    private $conexion;

    public function __construct($servidor, $baseDeDatos, $usuario, $contrasenia) {
        $this->servidor = $servidor;
        $this->baseDeDatos = $baseDeDatos;
        $this->usuario = $usuario;
        $this->contrasenia = $contrasenia;

        $this->conectar();
    }

    private function conectar() {
        try {
            $this->conexion = new PDO("pgsql:host=$this->servidor; dbname=$this->baseDeDatos", $this->usuario, $this->contrasenia);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo "Error de conexión: " . $ex->getMessage();
        }
    }

    public function getConexion() {
        return $this->conexion;
    }
}

$servidor = "localhost";
$baseDeDatos = "proyecto";
$usuario = "postgres";
$contrasenia = "postgres";

$conexionBD = new ConexionBD($servidor, $baseDeDatos, $usuario, $contrasenia);
$conexion = $conexionBD->getConexion();

?>




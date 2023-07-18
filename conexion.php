<?php
class conexion {
    private $servidor = "localhost";
    private $usuario = "root";
    private $pass = "L0ockeate123#";
    private $conexion;
    private $base = "proyecto";

    public function __construct() {
        try {
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=$this->base", $this->usuario, $this->pass);
            if ($this->conexion) {
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexión exitosa";
            } else {
                echo "Falla de Conexión: No se pudo establecer la conexión a la base de datos.";
            }
        } catch (PDOException $e) {
            echo "Error en la conexión: " . $e->getMessage();
        }
    }

    public function ejecutar($sql) {
        try {
            $this->conexion->exec($sql);
            return $this->conexion->lastInsertId();
        } catch (PDOException $e) {
            echo "Error en la ejecución: " . $e->getMessage();
            return null;
        }
    }
    public function consultar($sql) {
        try {
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->execute();
            return $sentencia->fetchAll();
        } catch (PDOException $e) {
            throw new Exception("Error en la consulta: " . $e->getMessage());
        }
    }
}
?>

<?php
  require_once "Conexion.php";
  class PasajerosModel extends Conexion{
    //Propiedades
    public $dni;
    public $nombre;
    public $apellidos;
    public $origen;
    public $destino;

    //Metodos
    public function Registrarboleto() {
        $this->abrirConexion();
        $query = "INSERT INTO pasajeros (dni,nombre,apellidos,origen,destino)
                      VALUES(?,?,?,?,?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("sssss",$this->dni,$this->nombre,$this->apellidos,$this->origen,$this->destino);
        try {
          $resultado = $stmt->execute();
        } catch (\Exception $e) {
          $resultado=false;
        }
        $stmt->close();
        $this->cerrarConexion();
        return $resultado;
      }
    }
?>

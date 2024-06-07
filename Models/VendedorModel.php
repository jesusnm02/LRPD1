<?php
  require_once "Conexion.php";
  class VendedorModel extends Conexion{
    //Propiedades
    public $DNI;
    public $password;

    //Metodos
    public function VerificarVendedor($dni,$psw) {
      $this->abrirConexion();
      $query = "SELECT * FROM vendedor WHERE DNI=? AND password=?";
      $stmt = $this->conexion->prepare($query);
      $stmt->bind_param("ss",$dni,$psw);
      $stmt->execute();
      $resultado = $stmt->get_result();
      $datos = [];
      while ($fila = $resultado->fetch_assoc()) {
          $datos[] = $fila;
      }
      $stmt->close();
      $this->cerrarConexion();
      return $datos;
    }
  }
?>

<?php

require_once 'Models/PasajerosModel.php';

class PasajerosController {
    private $modelo;
    
    public function __construct() {
        $this->modelo = new PasajerosModel();
    }

    public function grabar(){
        $this->modelo->dni=$_POST["dni"];
        $this->modelo->nombre=$_POST["nombre"];
        $this->modelo->apellidos=$_POST["apellidos"];
        $this->modelo->origen=$_POST["origen"];
        $this->modelo->destino=$_POST["destino"];
        $grabar=$this->modelo->Registrarboleto();
        }
}
?>
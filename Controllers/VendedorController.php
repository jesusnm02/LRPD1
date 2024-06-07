<?php

require_once 'Models/VendedorModel.php';

class VendedorController {
    private $modelo;
    
    public function __construct() {
        $this->modelo = new VendedorModel();
    }

    public function ValidarVendedor($dni,$psw) {
        $datos = $this->modelo->VerificarVendedor($dni,$psw);
        return $datos;
    }
}
?>
<?php

    class ConductoresController {
        public function index() {
            require_once("models/ConductoresModel.php");
            $conductores = new Conductores_Model();
            $data['tituloC'] = "Conductores";
            $data['conductores'] = $conductores->get_conductores();

            require_once("views/conductores/conductores.php");
        }
    }
    

?>
<?php

    class ConductoresController {

        public function __construct() {
            require_once ('models/ConductoresModel.php');
        }
        public function index() {
            require_once("models/ConductoresModel.php");
            $conductores = new Conductores_model();
            $data["tituloC"] = "Conductores";
            $data["conductores"] = $conductores->get_conductores();

            require_once("views/conductores/conductores.php");
        }

        public function nuevo() {
            $data["tituloC"] = "Conductores";
            require_once("views/conductores/conductores_nuevo.php");
        }

        public function guarda() {

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $genero = $_POST['genero'];
            $DNI = $_POST['DNI'];

            $conductores = new Conductores_model();
            $conductores->insertar($nombre, $apellido, $edad, $genero, $DNI);

            //$data["tituloC"] = "Conductores";
            $this->index();
        }

        public function modificar($id) {
            $conductores = new Conductores_model();

            $data["id"] = $id;
            $data["conductores"] = $conductores->get_conductor($id);
            $data["titulo"] = "Conductores";
            require_once("views/conductores/conductores_modificar.php");
        }

        public function actualizar() {

            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $genero = $_POST['genero'];
            $DNI = $_POST['DNI'];

            $conductores = new Conductores_model();
            $conductores->modificar($id, $nombre, $apellido, $edad, $genero, $DNI);

            $data["titulo"] = "Conductores";
            $this->index();
        }

        public function eliminar($id) {

            $conductores = new Conductores_model();
            $conductores->eliminar($id);

            $data["titulo"] = "Conductores";
            $this->index();
        }

    }

?>
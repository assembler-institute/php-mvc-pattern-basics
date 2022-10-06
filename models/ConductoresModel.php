<?php

    class Conductores_model {
        private $db;
        private $conductores;
        public function __construct() {
            $this->db = Conectar::conexion();
            $this->conductores = array();

        }
        public function get_conductores() {
            $sql = "SELECT * FROM conductores";
            $resultado = $this->db->query($sql);
            while($row = $resultado->fetch_assoc()) {
                $this->conductores[] = $row;
            }
            return $this->conductores;
        }
        
        public function insertar($nombre, $apellido, $edad, $genero, $DNI) {
            $resultado = $this->db->query("INSERT INTO conductores (nombre, apellido, edad, genero, DNI) VALUES ('$nombre', '$apellido', '$edad', '$genero', '$DNI')");
            return $resultado;
        }

        public function modificar($id, $nombre, $apellido, $edad, $genero, $DNI) {
            $resultado = $this->db->query("UPDATE conductores SET nombre='$nombre', apellido='$apellido', edad='$edad', genero='$genero', DNI='$DNI' WHERE id = '$id'");   
        }

        public function eliminar($id) {
            $resultado = $this->db->query("DELETE FROM conductores WHERE id = '$id'");           
        }

        public function get_conductor($id) {
            $sql = "SELECT * FROM conductores WHERE id='$id' LIMIT 1";
            $resultado = $this->db->query($sql);
            $row = $resultado->fetch_assoc();

            return $row;
        }

    }

?>
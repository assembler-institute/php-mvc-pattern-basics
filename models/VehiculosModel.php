<?php

    class Vehiculos_model {
        private $db;
        private $vehiculos;
        public function __construct() {
            $this->db = Conectar::conexion();
            $this->vehiculos = array();

        }
        public function get_vehiculos() {
            $sql = "SELECT * FROM vehiculos";
            $resultado = $this->db->query($sql);
            while($row = $resultado->fetch_assoc()) {
                $this->vehiculos[] = $row;
            }
            return $this->vehiculos;
        }
        
        public function insertar($marca, $modelo, $anio, $color, $placa) {
            $resultado = $this->db->query("INSERT INTO vehiculos (marca, modelo, anio, color, placa) VALUES ('$marca', '$modelo', '$anio', '$color', '$placa')");
            return $this->resultado;
        }

        public function modificar($id, $marca, $modelo, $anio, $color, $placa) {
            $resultado = $this->db->query("UPDATE vehiculos SET marca='$marca', modelo='$modelo', anio='$anio', color='$color', placa='$placa' WHERE id = '$id'");   
        }

        public function eliminar($id) {
            $resultado = $this->db->query("DELETE FROM vehiculos WHERE id = '$id'");           
        }

        public function get_vehiculo($id) {
            $sql = "SELECT * FROM vehiculos WHERE id='$id' LIMIT 1";
            $resultado = $this->db->query($sql);
            $row = $resultado->fetch_assoc();

            return $row;
        }

    }

?>
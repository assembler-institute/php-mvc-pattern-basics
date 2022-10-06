<?php

    class Conductores_Model {
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

    }

?>
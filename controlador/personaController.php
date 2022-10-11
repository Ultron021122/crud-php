<?php
    require_once ("../php/connection.php");
    class consultas extends connection {
        public function insert_persona($nombre, $apellidos, $sexo)
        {
            $sql = "INSERT INTO persona(nombre, apellidos, sexo)VALUES('$nombre','$apellidos','$sexo')";
            if($this->_db->query($sql)) {
                $resultado = $this->select_persona();
                return $resultado;
            }
        }

        public function select_persona(){
            $sql = "SELECT * FROM persona";
            $resultado = $this->_db->query($sql);
            return $array = $resultado->fetch_all(MYSQLI_ASSOC);
        }
    }

?>
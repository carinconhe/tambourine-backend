<?php
    class Connector{

        public static function conexion(){
            $conexion=new mysqli("localhost", "root", "", "tambourine");
            $conexion->query("SET NAMES 'utf8'");
            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }
            return $conexion;
        }
    }
?>
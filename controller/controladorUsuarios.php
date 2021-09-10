<?php

require_once 'conexion.php';
require_once 'model/Password.php';

Class ControladorUsuarios {

    public static function buscarUsuario($email) {
        try {
            $conex = new Conexion();
            $result = $conex->prepare("SELECT * FROM contra WHERE pass=?");
            $result->bindParam(1, $email);
            $result->execute();
            if ($result->rowCount()) {
                $registro = $result->fetchObject();
                $c = new Password($registro->pass);

                return $c;
            }
            unset($result);
            unset($conex);
        } catch (PDOException $ex) {
            $errores[] = $ex->getMessage();
        }
        unset($conex);
    }


    
}



?>
<?php

class Conexion{
    public function __construct()
    {
        try{
            $this->stm = new PDO("mysql:host=localhost;dbname=tienda_marlly",'root','');
        } catch (PDOException $error) {
            echo "Error en: ->" . $error->getMessage();
        }
    }
}

?>
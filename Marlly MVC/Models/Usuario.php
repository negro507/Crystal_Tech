<?php

class Usuario{
    protected $Id_Cliente;
    protected $Nombre_Cliente;
    protected $Correo_Cliente;
    protected $Celular_Cliente;
    protected $Contrasena_Cliente;
    
    // Este modelo es el unico que va a conectar a base de datos y va a GUARDAR en la misma    

    public function GuardarUsuario()
    {
        include_once '../Config/Conexion.php';
        $conexion = new Conexion();
        // Mandamos a Guardar de Esta Forma Sujetos a SQL INYECCION!! - Marcadores Anonimos
        $sql = "INSERT INTO cliente (Nombre_Cliente,Correo_Cliente,Celular_Cliente,Contrasena_Cliente) VALUES (?,?,?,?)";
        $insertar = $conexion->stm->prepare($sql);
        $insertar->bindParam(1,$this->Nombre_Cliente);
        $insertar->bindParam(2,$this->Correo_Cliente);
        $insertar->bindParam(3,$this->Celular_Cliente);
        $insertar->bindParam(4,$this->Contrasena_Cliente);
        $insertar->execute();
    }

    public function ConsultarUsuarioEnBd()
    {
        include_once '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "SELECT * FROM cliente WHERE Correo_Cliente='$this->Correo_Cliente'";
        $cliente = $conexion->stm->prepare($sql);
        $cliente->execute();
        $clienteObjeto = $cliente->fetchAll(PDO::FETCH_OBJ);
        return $clienteObjeto; 
    }
}
    
?>
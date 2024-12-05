<?php

session_start();
//Variables de SESION!

include_once '../Models/Usuario.php';
class ControladorUsuarios extends Usuario{

     public function CargarVistaInicio()
    {   
        include 'C:\xampp\htdocs\Marlly MVC\Views\Usuario\Inicio.php';
    }

    public function CargarPaginaPrincipal()
    {   
        include 'C:\xampp\htdocs\Marlly MVC\Views\Pagina Inicio.php';
    }
    

    public function AlistarInformacion($Nombre_Cliente,$Correo_Cliente,$Celular_Cliente,$Contrasena_Cliente)
    {
       $this->Nombre_Cliente = $Nombre_Cliente;
       $this->Correo_Cliente = $Correo_Cliente;
       $this->Celular_Cliente = $Celular_Cliente;
       $contrasenaencrip = password_hash($Contrasena_Cliente,PASSWORD_ARGON2ID);
       $this->Contrasena_Cliente = $contrasenaencrip;
       $this->GuardarUsuario();
    }

    public function VerificarLogin($Correo_Cliente,$Contrasena_Cliente)
    {
        
        $this->Correo_Cliente = $Correo_Cliente;
        $this->Contrasena_Cliente = $Contrasena_Cliente;
        $datosCliente = $this->ConsultarUsuarioEnBd();
        foreach ($datosCliente as $c) {}
        if(password_verify($this->Contrasena_Cliente,$c->Contrasena_Cliente)){
            echo "La contraseña Si Coincide";
            echo $_SESSION['nombre'];
            echo $_SESSION['correo'];
            echo $_SESSION['celular'];
            echo $_SESSION['contrasena'];
            header("location: ControladorUsuarios.php?action=inicio");
        }
        else
        {
            echo "Contraseña Equivocada";
        }          
    }

}

if(isset($_POST['action']) && $_POST['action']=='insertar'){
    $ControladorUsuarios = new ControladorUsuarios();
    $ControladorUsuarios->AlistarInformacion($_POST['nombre'],$_POST['correo'],$_POST['celular'],$_POST['contrasena']);
}

if(isset($_POST['action']) && $_POST['action']=='insertar'){
    $ControladorUsuarios = new ControladorUsuarios();
    $ControladorUsuarios->CargarPaginaPrincipal();
}

if(isset($_POST['action']) && $_POST['action']=='iniciar'){
    $ControladorUsuarios = new ControladorUsuarios();
    $ControladorUsuarios->VerificarLogin($_POST['correo'],$_POST['contrasena']);
}

if(isset($_GET['action']) && $_GET['action']=='inicio'){
    $ControladorUsuarios = new ControladorUsuarios();
    $ControladorUsuarios->CargarVistaInicio();
}

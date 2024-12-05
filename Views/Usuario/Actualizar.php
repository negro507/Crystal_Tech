<?php

$Id_Cliente = $_POST['Id_Cliente'];
$Nombre_Cliente = $_POST['nombre'];
$Correo_Cliente = $_POST['correo'];
$Celular_Cliente = $_POST['celular'];
$Contrasena_Cliente = $_POST['contrasena'];

include '../../Config/Conexion.php';

$conexion = new Conexion();
$sql = "UPDATE cliente SET Nombre_Cliente='$Nombre_Cliente',Correo_Cliente='$Correo_Cliente',Celular_Cliente='$Celular_Cliente',Contrasena_Cliente='$Contrasena_Cliente' WHERE Id_Cliente=$Id_Cliente";
$insertar = $conexion->stm->prepare($sql);
$insertar->execute();

header("location: Crud.php");




?>
<?php

$Id_Cliente = $_GET['Id_Cliente'];

include '../../Config/Conexion.php';

$conexion = new Conexion();
$sql = "DELETE FROM cliente WHERE Id_Cliente=$Id_Cliente";
$borrar = $conexion->stm->prepare($sql);
$borrar->execute();

header("location: Crud.php");

?>
<?php

$Id_Cliente = $_GET['Id_Cliente'];

include '../../Config/Conexion.php';

$conexion = new Conexion();
$sql = "SELECT * FROM cliente WHERE Id_Cliente=$Id_Cliente";
$consulta = $conexion->stm->prepare($sql);
$consulta->execute();
$cliente = $consulta->fetchAll(PDO::FETCH_OBJ);
foreach ($cliente as $p) {
}

?>
<form action="Actualizar.php" method="POST">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <label for="">Nombre</label>
            <input type="hidden" name="Id_Cliente" value="<?php echo $p->Id_Cliente;  ?>">
            <input type="text" name="nombre" id="Nombre" class="form-control" value="<?php echo $p->Nombre_Cliente;  ?>" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <label for="">Correo</label>
            <input type="email" name="correo" id="Correo" class="form-control" value="<?php echo $p->Correo_Cliente;  ?>" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <label for="">Celular</label>
            <input type="text" name="celular" id="Celular" class="form-control" value="<?php echo $p->Celular_Cliente;  ?>" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <label for="">Contraseña</label>
            <input type="password" name="contrasena" id="Contrasena" class="form-control" value="<?php echo $p->Contrasena_Cliente;  ?>" required>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-outline-success" value="Guardar" style="margin: 0 0 0 13rem;">Actualizar</button>
</form>
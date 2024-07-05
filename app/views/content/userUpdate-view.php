<?php

$id_descrypta=$ins_user->decryption($url[1]);

$id=$ins_login->limpiarCadena($id_descrypta);

if($id==$_SESSION['id']){
?>

<h2 class="mb-3">Mi cuenta</h3>
<h3 class="mb-3">Actualizar Cuenta</h3>
<hr>
<?php 
}else{
    ?>
<h2 class="mb-3">Usuarios</h3>
<h3 class="mb-3">Actualizar Usuario</h3>
<hr>
<?php 
}
    ?>

<?php 
include "./app/views/inc/btn_back.php";

$datos=$ins_login->seleccionarDatos("Unico","usuarios","usuario_id",$id);

if($datos->rowCount()==1){
$datos=$datos->fetch();
?>


<div class="text-center">
<h3 class="mb-3"><?php echo $datos['usuario_apellido']." ".$datos['usuario_nombre']?></h3>
<ul class="list-inline">
  <li class="list-inline-item"><p>Usuario creado: <strong><?php echo date("d-m-Y  h:i:s A",strtotime($datos['usuario_creado']))?></strong></p></li>
  <li class="list-inline-item"><p>Usuario actualizado: <strong><?php echo date("d-m-Y  h:i:s A",strtotime($datos['usuario_actualizado']))?></strong></p></li>
</ul>

</div>


<form class="form-control py-5 px-5 shadow-lg p-2 mb-2 bg-body rounded formularioAjax" action="<?php echo APP_URL?>app/ajax/usuarioAjax.php" method="POST" autocomplete="off">

    <input type="hidden" id="modulo_usuario" name="modulo_usuario" value="actualizar">
    <input type="hidden" name="usuario_id" value="<?php echo $url[1];?>">

    <div class="row mb-3">
        <div class="col-12 col-lg-6">
            <label for="usuario_nombre" class="form-label h5">Nombre</label>
            <input type="text" class="form-control shadow-lg p-2 mb-2 bg-body rounded" name="usuario_nombre"  value="<?php echo $datos['usuario_nombre'];?>" id="usuario_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
        </div>

        <div class="col-12 col-lg-6">
            <label for="usuario_apellido" class="form-label h5">Apellido</label>
            <input type="text" class="form-control shadow-lg p-2 mb-2 bg-body rounded" name="usuario_apellido" value="<?php echo $datos['usuario_apellido'];?>" id="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
        </div>

    </div>

    <div class="row mb-3">

        <div class="col-12 col-lg-6">
            <label for="usuario_email" class="form-label h5">Email</label>
            <input type="email" class="form-control shadow-lg p-2 mb-2 bg-body rounded" name="usuario_email" value="<?php echo $datos['usuario_email'];?>" id="usuario_email">
        </div>

        <div class="col-12 col-lg-6">
            <label for="usuario_usuario" class="form-label h5">Usuario</label>
            <input type="text" class="form-control shadow-lg p-2 mb-2 bg-body rounded" name="usuario_usuario" value="<?php echo $datos['usuario_usuario'];?>" id="usuario_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>
        </div>

    </div>

    <div class="row mb-3">

        <div class="col-12 col-lg-6">
            <label for="usuario_clave_1" class="form-label h5">Nueva Clave</label>
            <input type="password" class="form-control shadow-lg p-2 mb-2 bg-body rounded" name="usuario_clave_1" value="" id="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}">
        </div>

        <div class="col-12 col-lg-6">
            <label for="usuario_clave_2" class="form-label h5">Repite Clave</label>
            <input type="password" class="form-control shadow-lg p-2 mb-2 bg-body rounded" name="usuario_clave_2" value="" id="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}">
        </div>

    </div>

    <div class="text-center mt-5">
        <button type="submit" class="btn btn-success">Actualizar</button>
    </div>

</form>

<?php

}else{

    include "./app/views/inc/error_alert.php";
}

?>
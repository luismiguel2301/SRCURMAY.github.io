<h3 class="mb-3">Agregar Usuario</h3>
<hr>
<form class="form-control py-5 px-5 shadow-lg p-2 mb-2 bg-body rounded formularioAjax" action="<?php echo APP_URL?>app/ajax/usuarioAjax.php" method="POST" autocomplete="off">

    <input type="hidden" id="modulo_usuario" name="modulo_usuario" value="registrar">

    <div class="row mb-3">
        <div class="col-12 col-lg-6">
            <label for="usuario_nombre" class="form-label h5">Nombre</label>
            <input type="text" class="form-control shadow-lg p-2 mb-2 bg-body rounded" name="usuario_nombre" id="usuario_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
        </div>

        <div class="col-12 col-lg-6">
            <label for="usuario_apellido" class="form-label h5">Apellido</label>
            <input type="text" class="form-control shadow-lg p-2 mb-2 bg-body rounded" name="usuario_apellido" id="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
        </div>

    </div>

    <div class="row mb-3">

        <div class="col-12 col-lg-6">
            <label for="usuario_email" class="form-label h5">Email</label>
            <input type="email" class="form-control shadow-lg p-2 mb-2 bg-body rounded" name="usuario_email" id="usuario_email">
        </div>

        <div class="col-12 col-lg-6">
            <label for="usuario_usuario" class="form-label h5">Usuario</label>
            <input type="text" class="form-control shadow-lg p-2 mb-2 bg-body rounded" name="usuario_usuario" id="usuario_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>
        </div>

    </div>

    <div class="row mb-3">

        <div class="col-12 col-lg-6">
            <label for="usuario_clave_1" class="form-label h5">Clave</label>
            <input type="password" class="form-control shadow-lg p-2 mb-2 bg-body rounded" name="usuario_clave_1" id="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>

        </div>

        <div class="col-12 col-lg-6">
            <label for="usuario_clave_2" class="form-label h5">Repetir Clave</label>
            <input type="password" class="form-control shadow-lg p-2 mb-2 bg-body rounded" name="usuario_clave_2" id="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>

        </div>

    </div>

    <div class="text-center mt-5">
        <button type="submit" class="btn btn-success">Guardar</button>
        <button type="reset" class="btn btn-danger">Limpiar</button>
    </div>

</form>
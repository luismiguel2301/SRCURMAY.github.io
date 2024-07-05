<div class="m-0 vh-100 row justify-content-center align-items-center">
<div class="col-auto" style="width:450px">
<form class="form-control py-5 px-5" action="" method="POST" autocomplete="off">
<h1 class="h3 mb-3 fw-normal">Por favor inicia sesión</h1>
<div class="form-floating mb-3">
<input type="text" class="form-control" id="login_usuario" name="login_usuario" pattern="[a-zA-Z0-9]{8,20}" maxlength="20" placeholder="usuario" required>
<label for="floatingInput">usuario</label>
</div>
<div class="form-floating mb-3">
<input type="password" class="form-control" id="login_clave" name="login_clave" pattern="[a-zA-Z0-9]{8,100}" maxlength="100" placeholder="clave" required>
<label for="floatingPassword">Contraseña</label>
</div>
<div class="text-center">
<button class="btn btn-primary" type="submit">Iniciar sesión</button>
</div>
</form>
</div>
</div>

<?php
if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
    $ins_login->iniciarSesionControlador();
}
?>
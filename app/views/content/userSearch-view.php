<div class="container">
<h1 class="text-center">Usuarios</h1>
    <h2 class="text-center">Buscar usuarios</h2>
</div>
    <?php
    
        use app\controllers\userController;
        $insUsuario = new userController();

        if(!isset($_SESSION[$url[0]]) && empty($_SESSION[$url[0]])){
    ?>
    <div class="row py-4">
        <div class="col-12">
            <form class="form-control py-5 px-5 shadow-lg p-2 mb-2 bg-body rounded formularioAjax" action="<?php echo APP_URL; ?>app/ajax/buscadorAjax.php" method="POST" autocomplete="off" >
                <input type="hidden" name="modulo_buscador" value="buscar">
                <input type="hidden" name="modulo_url" value="<?php echo $url[0]; ?>">
                <input class="form-control mb-3" type="text" name="txt_buscador" placeholder="¿Qué estas buscando?" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" maxlength="30" required >
               <div class="text-center">
                <button class="btn btn-success" type="submit" >Buscar</button>
                </div>
            </form>
        </div>
    </div>
    <?php }else{ ?>
    <div class="row py-4">
            <form class="text-center mb-3 mt-3 formularioAjax" action="<?php echo APP_URL; ?>app/ajax/buscadorAjax.php" method="POST" autocomplete="off" >
                <input type="hidden" name="modulo_buscador" value="eliminar">
                <input type="hidden" name="modulo_url" value="<?php echo $url[0]; ?>">
                <p>Estas buscando <strong>“<?php echo $_SESSION[$url[0]]; ?>”</strong></p>
                <br>
                <button type="submit" class="btn btn-danger">Eliminar busqueda</button>
            </form>
    </div>
    <?php
            echo $insUsuario->listarUsuarioControlador($url[1],15,$url[0],$_SESSION[$url[0]]);
        }
    ?>
    </div>
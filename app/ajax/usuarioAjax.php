<?php
require_once "../../config/app.php";
require_once "../views/inc/session_start.php";
require_once "../../autoload.php";

use app\controllers\userController;

if (isset($_POST['modulo_usuario'])) {

    $ins_usuario = new userController();

    if($_POST['modulo_usuario']=="registrar"){
        echo $ins_usuario->registrarUsuarioControlador();
    }

    if($_POST['modulo_usuario']=="eliminar"){
        echo $ins_usuario->eliminarUsuarioControlador();
    }

    if($_POST['modulo_usuario']=="actualizar"){
        echo $ins_usuario->actualizarUsuarioControlador();
    }

} else {
    session_destroy();
    header("Location: " . APP_URL . "login/");
}

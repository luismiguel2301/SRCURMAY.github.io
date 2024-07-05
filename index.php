<?php

require_once "./config/app.php";
require_once "./autoload.php";
require_once "./app/views/inc/session_start.php";

if (isset($_GET['views'])) {
    $url = explode("/", $_GET['views']);
} else {
    $url = ["login"];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "./app/views/inc/head.php"; ?>
</head>

<body>

<div class="container">

    <?php

    use app\controllers\viewsController;
    use app\controllers\loginController;
    

    $ins_login=new loginController();
    $viewsController = new viewsController();
    

    $vista=$viewsController->obtenerVistasController($url[0]);

    if($vista=="login" || $vista=="404"){
        require_once "./app/views/content/".$vista."-view.php";
    }else{

        //cerrar session
        if(!isset($_SESSION['id']) || !isset($_SESSION['usuario']) || $_SESSION['id']=="" || $_SESSION['usuario']==""){
            $ins_login->cerrarSesionControlador();
            exit();
        }

        require_once "./app/views/inc/navbar.php";
        require_once $vista;
    }

    require_once "./app/views/inc/script.php";
    ?>
</div>
</body>

</html>
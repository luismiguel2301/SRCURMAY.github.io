<?php 
use app\controllers\userController;
$ins_user = new userController();

$id=$ins_user->limpiarCadena($_SESSION['id']);
$id_encrypta=$ins_user->encryption($_SESSION['id']);

?>

<nav class="navbar sticky-top navbar-expand-lg py-3">
  <div class="container">
  <a class="navbar-brand" href="<?php echo APP_URL;?>dashboard/">
      <img src="<?php echo APP_URL;?>app/views/img/1.png" alt="Bootstrap" width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-sm-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo APP_URL;?>dashboard/">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuarios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo APP_URL;?>userNew/">Nuevo</a></li>
            <li><a class="dropdown-item" href="<?php echo APP_URL;?>userList/">Lista</a></li>
            <li><a class="dropdown-item" href="<?php echo APP_URL;?>userSearch/">Buscar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sesión: <?php echo $_SESSION['usuario'];?>
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo APP_URL."userUpdate/".$id_encrypta."/";?>">Mi cuenta</a></li>
            <li><a class="dropdown-item" href="<?php echo APP_URL;?>logOut/" id="btn_exit">Salir</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
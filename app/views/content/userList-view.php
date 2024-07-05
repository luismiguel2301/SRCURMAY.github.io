<h3 class="mb-3">Lista Usuario</h3>
<hr>

<?php

use app\controllers\userController;

$ins_usuario = new userController();
echo $ins_usuario->listarUsuarioControlador($url[1],5,$url[0],"");

?>
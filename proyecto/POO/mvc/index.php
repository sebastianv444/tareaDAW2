<?php

    // cargamos el controlador según la perición

    require_once 'controllers/UserController.php';

    // definimos una lógica simple para enrutar
    $controller = new UserController();
    /* Este if dice: si entras por mi pagina por primera vez, ya que por defecto el get viene
    de default cuando entras a la paginá en el protocolo http */
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $controller-> index();
    }

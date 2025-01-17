<?php

    // cargamos el controlador según la perición

    require_once 'controllers/UserController.php';

    // definimos una lógica simple para enrutar
    $controller = new UserController();
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $controller-> index();
    }
<?php

    /* RECUERDA: es mejor requerir lo que se necesita en el archivo que lo necesitamos,
    si en los controladores necetiabamos al modelo, pues lo importabamos ahí. */
    require_once 'models/Producto.php';
    require_once 'controllers/ProductoController.php';

    $controler = new ProductoController();
    $action = isset($_GET['action']) ? $_GET['action']: 'index';

    switch ($action) {
        case 'crear':
            $controler->crear();
            break;
        default:
            $controler->index();
            break;
    }
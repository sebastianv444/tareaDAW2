<?php
session_start(); // Iniciar o reanudar la sesión

// Verificar la acción que el usuario quiere realizar
if (isset($_POST['accion'])) {
    $accion = $_POST['accion'];

    switch ($accion) {
        case 'agregar':
            // Agregar producto al carrito
            if (isset($_POST['producto']) && isset($_POST['cantidad'])) {
                $producto = $_POST['producto'];
                $cantidad = intval($_POST['cantidad']);

                // Si el carrito no existe, lo inicializamos como un array vacío
                if (!isset($_SESSION['carrito'])) {
                    $_SESSION['carrito'] = array();
                }

                // Si el producto ya existe en el carrito, incrementar su cantidad
                if (isset($_SESSION['carrito'][$producto])) {
                    $_SESSION['carrito'][$producto] += $cantidad;
                } else {
                    // Si es un nuevo producto, agregarlo
                    $_SESSION['carrito'][$producto] = $cantidad;
                }
            }
            break;

        case 'actualizar':
            // Actualizar la cantidad de productos en el carrito
            if (isset($_POST['nueva_cantidad']) && is_array($_POST['nueva_cantidad'])) {
                foreach ($_POST['nueva_cantidad'] as $producto => $nueva_cantidad) {
                    $_SESSION['carrito'][$producto] = intval($nueva_cantidad);
                }
            }
            break;

        case 'eliminar':
            // Eliminar un producto del carrito
            if (isset($_POST['producto_eliminar'])) {
                $producto = $_POST['producto_eliminar'];
                unset($_SESSION['carrito'][$producto]);
            }
            break;

        case 'vaciar':
            // Vaciar el carrito completamente
            unset($_SESSION['carrito']);
            break;
    }
}

// Redirigir de vuelta a index.php para mostrar los cambios
header('Location: inicio_compra.php');
exit();

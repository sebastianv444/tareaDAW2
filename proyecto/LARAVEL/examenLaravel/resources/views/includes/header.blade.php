<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado proveedores</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        nav{
            background-color: rgb(61, 61, 255);
            height: 80px;
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            align-content: center;
            padding: 30px;
            margin-bottom: 40px
        }
        .navegacion{
            list-style: none;
            display: flex;
            flex-direction: row;
            gap: 15px;
            color: white;
        }
        .navegacion a{
            color: white
        }
        section{
            margin-left: 65px
        }
        footer{
            margin-top: 50px
        }
        table,td,tr,th{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 12px
        }
    </style>
</head>
<body>

    <nav>
        <ul class="navegacion">
            <h3>Gestión de Proveedores</h3>
            <li><a href="{{ action('\App\Http\Controllers\ProveedorController@index') }}">Inicio</a></li>
            <li><a href="{{ action('\App\Http\Controllers\ProveedorController@create') }}">Crear Proveedor</a></li>
            <li><a href="{{ action('\App\Http\Controllers\InformacionController@index') }}">Información</a></li>
            <li><a href="">clientes/proveeedores</a></li>
        </ul>
    </nav>

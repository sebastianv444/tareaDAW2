<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación MVC</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <header>
        <h1>Colegio el Alamillo de Colores</h1>
        <nav>
            <ul>
                <li><a href="?controller=Alumnos&action=AlumnosPorAsignatura">Inicio</a></li>
                <li><a href="?controller=Alumnos&action=MostrarTodos">Alumnos</a></li>
                <?php if (isset($_SESSION['navProfe'])): ?>
                    <li><a href="?controller=Alumnos&action=AlumnosPorAsignatura">Dashboard</a></li>
                    <li><a href="?controller=Alumnos&action=MostrarTodos">Modificar Asignatura</a></li>
                <?php endif; ?>
                <?php if(!isset($_SESSION['navProfe'])):?>
                    <li><a href="?controller=Profesor&action=MostrarVistaSolo">Login</a></li>
                <?php else:?>
                    <li><a href="?controller=Profesor&action=Logout">Login</a></li>
                <?php endif;?>
            </ul>
        </nav>
    </header>
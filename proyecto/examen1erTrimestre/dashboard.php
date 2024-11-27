<?php 
session_start();
$dashboardNav = 'nav--div';
$dashboard = true;
$estilo = 'index.css';
$titulo = 'DASHBOARD';
include 'header.php'?>

<main>
    <section>
        <h1>Dashboard</h1>

        <form action="dashboard.php" method="POST">
            <?php if(!isset($_GET['guardado'])):?>
            <label for="nombre">NOMBRE</label><br>
            <input type="text" name="nombre" id="nombre"><br><br>
            
            <label for="apellido">APELLIDO</label><br>
            <input type="text" name="apellido" id="apellido"><br><br>
            
            <label for="edad">EDAD</label><br>
            <input type="number" name="edad" id="edad"><br><br>
            
            <label for="email">EMAIL</label><br>
            <input type="email" name="email" id="email"><br><br>
            
            <button type="submit">GUARDAR</button>
                <?php if(isset($_GET['error'])):?>
                    <p style="color: red; ">Ingrese bien sus datos</p>
                <?php endif;?>
            <?php else:?>
            <p style="color: green; text-shadow: 0 0 5px black;">Datos guardados</p>
            <a href="profile.php" style="text-shadow: 0 0 5px black; color:aqua">Ver Perfil</a>
            <?php endif;?>
        </form>
    </section>
</main>

<?php include 'footer.php'?>

<?php 

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nombre = isset($_POST['nombre']) && !empty($_POST['nombre']) ? strip_tags(trim($_POST['nombre'])) :null;
        $apellido= isset($_POST['apellido']) && !empty($_POST['apellido']) ? strip_tags(trim($_POST['apellido'])) :null;
        $edad = isset($_POST['edad']) && !empty($_POST['edad']) ? (int)strip_tags(trim($_POST['edad'])) :null;
        $email = isset($_POST['email']) && !empty($_POST['email']) ? strip_tags(trim($_POST['email'])) :null;

        if(isset($nombre) && isset($apellido) && isset($edad) && isset($email)){
            if(is_string($nombre) && is_string($apellido) && is_int($edad) && filter_var($email,FILTER_VALIDATE_EMAIL)){
                $_SESSION['datosUsuario'] = [
                    "nombre" => $nombre,
                    "apellido" => $apellido,
                    "edad" => $edad,
                    "email" => $email
                ];
                header('Location:dashboard.php?guardado');
            }else{
                header('Location:dashboard.php?error');
            }
            
        }else{
            header('Location:dashboard.php?error');
        }

    };

?>
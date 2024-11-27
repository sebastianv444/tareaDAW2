<?php 
session_start();

if($_SESSION['datosUsuario']){
    $perfilNav = 'nav--div';
    $dashboard = true;
    $estilo = 'index.css';
    $titulo = 'PERFIL';
    include 'header.php';
}else{
    header("location:dashboard.php");
};
?>

<main>
    <section>
        <h1>Dashboard</h1>
        <?php foreach($_SESSION['datosUsuario'] as $clave => $valor):?>
            <p><b style="text-shadow: 0 0 5px red;"><?= htmlspecialchars(strtoupper($clave)).': '?></b><?=$valor?></p>
        <?php endforeach;?>
        
    </section>
</main>

<?php include 'footer.php'?>
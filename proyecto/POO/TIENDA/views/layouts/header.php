<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Tienda de Camisetas</title>
		<link rel="stylesheet" href="assets/css/styles.css" />
	</head>
	<body>
		<div id="container">
			<!-- CABECERA -->
			<header id="header">
				<div id="logo">
					<img src="assets/img/camiseta.png" alt="Camiseta Logo" />
					<a href="index.php">
						Tienda de camisetas
					</a>
				</div>
			</header>

			<!-- MENU -->
			 <!-- retorna un array de objetos -->
			 <?php $categorias = Utils::mostrarCategorias();?>
			<nav id="menu">
				<ul>
					<li>
						<a href="#">Inicio</a>
					</li>
					<?php while($categoria = $categorias->fetch_object()):?>
					<li>
						<a href="#"><?= $categoria->nombre;?></a>
					</li>
					<?php endwhile;?>
				</ul>
			</nav>

			<div id="content">
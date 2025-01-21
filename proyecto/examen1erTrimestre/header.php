<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $estilo ?? '' ?>">
    <title><?= $titulo ?? 'TITULO' ?></title>
    <style>
        * {
            text-decoration: none;
            box-sizing: border-box;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            flex-flow: column wrap;
            justify-content: space-between;
            margin: 0;
            width: 100vw;
            height: 100vh;
            background: url("https://preview.redd.it/p9zvxbxi72f91.jpg?width=2560&format=pjpg&auto=webp&s=a76d8f8c6bd457f9dd3aaa4c17c24d9df5d39c73")center no-repeat;
            background-size: cover;
            color: white;
        }

        header {
            width: 100%;
            height: 90px;
        }

        nav {
            display: flex;
            width: 100%;
            height: 100%;
            background-color: brown;
            text-align: center;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        .nav--div {
            display: flex;
            background-color: black;
            height: 100%;
            align-items: center;
            padding: 10px 23px;
            box-shadow:
                0 0 15px 7px black,
                inset 0 0 30px 5px black;
        }

        .nav--a {
            color: white;
            transition: 0.4s ease-out;
            font-weight: 600;
        }

        .nav--a:hover {
            transition: 0.3s ease-in;
            transform: scale(1.2, 1.1);
            color: wheat;
        }

        footer {
            width: 100%;
            display: flex;
            flex-flow: column wrap;
            align-items: center;
            font-weight: 600;
        }

        hr {
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <?php if (isset($registro) || isset($index)): ?>
                <div class="<?= $indexNav ?? '' ?>">
                    <a href="index.php" class="nav--a">Inicio</a>
                </div>
                <div class="<?= $loginNav ?? '' ?>">
                    <a href="index.php" class="nav--a">Login</a>
                </div>
            <?php elseif (isset($dashboard)): ?>
                <div class="<?= $indexNav ?? '' ?>">
                    <a href="index.php" class="nav--a">Inicio</a>
                </div>
                <div class="<?= $dashboardNav ?? '' ?>">
                    <a href="dashboard.php" class="nav--a">Dashboard</a>
                </div>
                <div class="<?= $perfilNav ?? '' ?>">
                    <a href="profile.php" class="nav--a">Perfil</a>
                </div>
                <div>
                    <a href="logout.php" class="nav--a">Salir</a>
                </div>
            <?php endif; ?>
        </nav>
    </header>
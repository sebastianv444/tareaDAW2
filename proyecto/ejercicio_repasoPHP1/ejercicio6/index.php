<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            height: 100vh;
            margin: 0;
        }

        form {
            display: flex;
            flex-flow: column wrap;
            justify-content: center;
            align-items: center;
            height: 100%;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 19px;
        }

        input {
            padding: 3px 10px;
            margin: 7px 10px;
        }

        div {
            display: inline-block;
            border: 1px solid black;
            text-align: center;
            padding: 77px 100px;
            /*los supuestos errores vienen de aqui, pero no hay un error como tal.*/
            <?php if (!isset($_SESSION['user'])): ?>background-image: url("https://www.mundodeportivo.com/alfabeta/hero/2020/12/pain-anime.jpg?width=768&aspect_ratio=16:9&format=nowebp");
            <?php else: ?>background-image: url("https://imgix.ranker.com/user_node_img/50081/1001613499/original/enough-to-start-a-war-photo-u1?auto=format&q=60&fit=crop&fm=pjpg&dpr=2&w=355");
            <?php endif; ?>background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        h2 {
            margin: 20px 0px 115px 0px;
        }

        p {
            color: red;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 25px;
        }

        h3 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-bottom: 200px;
            margin-top: 200px;
            font-size: 25px;

        }

        a {
            font-size: 30px;
            text-decoration: none;
            color: red;
        }
    </style>
</head>

<body>

    <form action="login.php" method="POST">

        <div>
            <?php if (!isset($_SESSION['user'])): ?>
                <h2>REGISTRATE</h1>

                    <label for="user">USUARIO</label><br>
                    <input type="text" name="user" id="user"><br><br><br>

                    <label for="password">CONTRASEÑA</label><br>
                    <input type="password" name="password" id="password"><br><br><br>
                    <?php if (isset($_GET['error'])) {
                        echo "<p>tus datos no coinciden</p>";
                    } ?>
                    <input type="submit" value="ENVIAR">
                <?php else: ?>
                    <h2 style="font-size: 33px;">Bienvenido</h2>
                    <h3><?= $_SESSION['user']['usuario']; ?></h3>
                    <a href="logout.php">Cerrar Session</a>
                    <style>
                        div {
                            padding: 33px 190px;
                        }
                    </style>
                <?php endif; ?>
        </div>

    </form>

</body>

</html>
<?php 
    session_start();
    if(!isset($_SESSION['userName'])){
        header('Location:index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            width: 100%;
            background-color: black;
            height: 100vh;
        }
        .flex{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            text-align: center;
        }
        h1,p{
            color: white;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 47px;
        }
        p{
            font-size: 30px;
            font-weight: 400;
        }
        a{
            text-decoration: none;
            color: white;
            transition:ease-out 0.5s;
            font-size: 20px;
            color: aqua;
        }
        a:hover{
            color: aqua;
            transition:ease-in 0.4s;
        }
    </style>
</head>
<body>
    <div class="flex">
        <div>
            <h1>SESION INICIADA</h1>
            <p>Bienvenido <?= htmlspecialchars($_SESSION['userName'])?></p><br><br>
            <a href="logout.php">Cerrar sesion</a>
        </div>
    </div>
</body>
</html>
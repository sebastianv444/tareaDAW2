<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 100%;
            margin: 0;
            height: 100vh;
            background-color: black;
        }
        form{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        div{
            background: url(https://i.pinimg.com/originals/53/67/02/53670256e1dc221b4815dc878ba395f2.jpg) no-repeat center;
            background-size: cover;
            padding: 95px;
            border: 1.9px solid white;
            border-radius: 15px;
            text-align: center;
        }
        input{
            border-radius: 5px;
            border: 1px solid black;
            background: none;
            padding: 3px;
        }
        div > *{
            margin: 10px;
        }
        h1{
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            margin-bottom: 55px;
        }
        label{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight:500;
            font-size: 16px;
        }
        button{
            padding: 8px 17px;
            border-radius: 20px;
            border: 1.5px solid black;
            background: transparent;
            cursor: pointer;
            transition: ease-out 0.5s;
        }
        button:hover{
            transition:ease-out 0.4s;
            border-color: aqua;
            transform: scale(1.1,1.1);
            color: aqua;
        }
        p{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 19px;
        }
        a{
            text-decoration: none;
            color: white;
            transition:ease-out 0.5s;
        }
        a:hover{
            color: aqua;
            transition:ease-in 0.4s;
        }
    </style>
</head>
<body>
    
    <form action="<?= $form ?? 'login.php'?>" method="POST">
        <div>
            <h1><?= $titulo ??'INICIAR SESION';?></h1>
            <label for="user"><?= $labelUsuario ?? 'USUARIO';?></label><br>
            <input type="text" name="<?= $nameUsuario ?? 'user';?>" id="user"><br><br>
            
            <label for="password"><?= $labelContraseña ?? 'CONTRASEÑA';?></label><br>
            <input type="password" name="<?= $namePassword ?? 'password';?>" id="password"><br><br>
            
            <?php if(isset($_GET['error']) && $_GET['error'] == 'vacio'):?>
                <p style="color: red;">Error campos vacios</p>
            <?php elseif(isset($_GET['error']) && $_GET['error'] == 'no_encontrado'):?>
                <p style="color: red;">Usuario no encontrado</p>
            <?php endif;?>
            
            <button type="submit"><?= $boton ?? 'INICIAR SESION'?></button><br><br><br>
            
            <?php if(!isset($registrarte)):?>
            <p><b>¿te has registrado?</b></p>
            <p>Registrate <a href="registrarte.php">aqui</a></p> 
            <?php elseif(isset($registrarte)):?>
            <p><b>¿Ya tienes una cuenta?</b></p>
            <p>Inicia sesion <a href="index.php">aqui</a></p>    
            <?php endif;?>
        </div>
    </form>

</body>
</html>
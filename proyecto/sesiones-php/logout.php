<?php

    session_start();

    /*destruimos todas las variables de sesion, ya que le cambiamos el 
    valor que tenia antes con argumentos como contraseña y tal,
    aqui lo igualamos a un array para que pierda el valor que tenia
    antes y ahora tenga el valor de un array vacio.*/
    $_SESSION = [];

    // si la sesion se creo usando una cookie, elimina
    if(ini_get('session.use_cookies')){
        $params = session_get_cookie_params();
        setcookie(session_name(). '', time() - 42000,
            $params['path'], $params["domain"],
            $params['secure'], $params['httponly']
    );
    }

    //destruir la sesión
    session_destroy();

    //redirig a la pagina de inici
    header("Location: login.php");
    exit();

    //aqui ya te manda a la pagina inicial con la sesion ya destruida.
?>

<a href="otra.php">ir a otra</a>
<?php
    
    if(isset($_POST)) {

    
        require_once './includes/conexion.php';
    
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
        $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;
    
        // validar los datos antes de introducirlos en la base de datos:
    
        // creo un array de errores:
    
        $errores = array();
    
        if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
            $nombre_validado = true;
        }else {
            $nombre_validado = false;
            $errores['nombre'] = "El nombre no es válido";
        }
        if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
            $apellidos_validado = true;
        }else {
            $apellidos_validado = false;
            $errores['apellidos'] = "El apellido no es válido"; 
        }
        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_validado = true;
        }else {
            $email_validado = false;
            $errores['email'] = 'El email no es válido';
        }
        if(!empty($password)){
            $password_validado = true;
        }else {
            $password_validado = false;
            $errores['password'] = "el password no puede ser vacío";
        }
        /* var_dump($errores); */

        //si el tamaño del array de errores es cero significa que no tiene errores:
            
            $guardar_usuario = false;
            if(count($errores) == 0) {
                $guardar_usuario = true;

                //encriptar password
                /* el tercer parametro significa que la encripta 4 veces para que sea
                mucho mas seguro, solo que si le ponemos mas veces para que se encripte 
                tira mas del procesador. */
                $password_segura = password_hash($password, PASSWORD_BCRYPT, 
                ['cost'=>4]);

                //insertar el usuario en la bbdd
                //hacemos la query directamente, ya que trajimos la conexion con el require_once.
                /* RECUERDA: las comillas simples en la variables en value son necesarias, ya que
                en value normal si es un string siempre va con comillas, sino haces esto con un 
                string dara un error */
                $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', 
                '$email', '$password_segura', CURDATE());";

                //esto va a guardar un booleano en la variable si se logro exitosamente
                //OJO!!:es un booleano, pero tambien obtienes el resultado de la consulta.
                $guardar = mysqli_query($db, $sql);

                if($guardar) {
                    $_SESSION['completado'] = "El usuario se ha guardado correctamente";
                }else {
                    $_SESSION['errores']['general'] = "¡Fallo al guardar usuario";
                }

            }else {
                $_SESSION['errores'] = $errores;          
            }
    }  header('Location: index.php');
?>
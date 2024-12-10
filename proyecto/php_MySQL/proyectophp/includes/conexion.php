<?

$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basedatos = 'blog';

$db = mysqli_connect($servidor, $usuario, $password, $basedatos);

if(mysqli_connect_error()) {
    echo "La conexión a la BBDD ha fallado: ".mysqli_connect_error();
}else {
    echo "¡ CONECTADOS CORRECTAMENTE A LA BASE DE DATOS";
}

session_start();
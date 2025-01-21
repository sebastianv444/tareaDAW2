<?php

    /* en PHP el método __destruct es un método mágico que se ejecuta automáticamente
       cuando un objeto es destruido. Es útil para realizar tareas de limpieza, como
       cerrar conexiones a base de datos, liberar recursos, o escribir información
       final en un archivo de log antes de que le objeto deje de existir.
    */

    class Usuario {
        public $nombre = "Pepe";
        public $email = "pepe@gmail.com";

        public function __construct()
        {
            //en un constructor NUNCA poner un echo. Sólo fines didácticos.
            echo "instancia creada <br/>";
        }

        public function __destruct()
        {
            echo "objeto destruido";
        }

        /* El método __toString() permite a una clase decidir cómo comportarse cuando se le trata 
        como un string. Por ejemplo, lo que echo $obj; mostraría. Este método debe devolver un 
        string, si no se emitirá un nivel de error fatal E_RECOVERABLE_ERROR. */
        public function __toString()
        {
            return "<br/>Hola, {$this->nombre}, estás registrado con el email: ";
        }
    }

    /* RECUERDA: que el objeto se destruye cuando ya no hay mas codigo, esto es por el destruct */

    $miUsuario = new Usuario();

    /* for ($i = 0; $i < 20 ; $i++) { 
        echo $i . "<br/>";
    } */

    echo $miUsuario;
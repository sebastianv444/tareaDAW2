<?php

    class Producto{
        private $datos;

        public function __construct()
        {
            /* Esta función es similar a file(), excepto que file_get_contents() devuelve el 
            fichero a un string, comenzando por el offset especificado hasta maxlen bytes. 
            Si falla, file_get_contents() devolverá false. */
             /* ponemos sin los ../ al principio, ya que esto que se va usar en el index principal
            de nuestra aplicacion y va tener que estar al mismo nivel de carpetas */
            $json = file_get_contents('datos/productos.json');
            /* Convierte un string codificado en JSON a una variable de PHP. Cuando es true, los objects
            JSON devueltos serán convertidos a array asociativos, cuando es false los objects JSON 
            devueltos serán convertidos a objects. Cuando es null, los objects JSON serán convertidos a 
            array asociativos u objects dependiendo de si JSON_OBJECT_AS_ARRAY es establecida en 
            los flags */
            $this->datos = json_decode($json, true); //devuelve un array asociativo por el true
        }

        public function obtenerTodos(){
            return $this->datos['productos'];
        }

        public function crear($producto){
            // obtener el último id y aumentamos en 1
            /* Establece el puntero interno de un array a su último elemento */
            $ultimoId = end($this->datos['productos'])['id'];
            $producto['id'] = $ultimoId + 1;

            // añadimos el nuevo producto
            $this->datos['productos'][] = $producto;

            // guardamos en el json
            $json = json_encode($this->datos, JSON_PRETTY_PRINT);
            file_put_contents('datos/productos.json', $json);

            return true;
        }
    }
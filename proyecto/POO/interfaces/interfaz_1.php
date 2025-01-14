<?php

    /* INTEFAZ:
        - Una interfaz es como un "contrato" que define qué métodos debe implementar una clase, 
        sin especificar como deben funcionar esos métodos. Las interfaces NO tiene lógica ni 
        atributos; sólo describen qué métodos deben existir y cómo deben llamarse.

        - En PHP las interfaces se definen con la palabra reservada interface.

        Características:

        - solo contiene declaraciones de métodos (sin cuerpo);
        - las clases que implementan una interfaz deben definirtodos los métodos de la interfaz.
        - una clase puede implementar MÚLTIPLES interfaces.

        Diferencias de clases abstractas e interfaces:
        
        - Una clase puede implementar varias interfaces pero SÓLO puede heredar de
        una clase abstracta.
        - las interfaces no pueden tener propiedades con estado, sólo constantes.
        - las clases abstractas pueden tener constructores, las interfaces no.
    */

    /* cuando usar una interfaz:
        hay clases que no tienen nada que ver con la interfaz, pero aveces se implementa
        esta interfaz, ya que puede haber solo algun metodo o alguna cosa en especifico 
        que nos interece, por mas que no usaremos toda la interfaz vamos a usar alguna cosa
        en especifico que nos interese para nuestra clase 
    */

    interface Transporte {
        public function mover(int $distancia):void;
        public function detener():void;
    }

    class Automovil implements Transporte{
        public function mover(int $distancia): void
        {
            echo "El automovil se mueve $distancia km <br/>";
        }

        public function detener(): void
        {
            echo "El automóvil se detiene <br/>";
        }
    }

    class Bicicleta implements Transporte{
        public function mover($distancia):void{
            echo "la bicicleta va avanzando $distancia km <br/>";
        }
        public function detener(): void
        {
            echo "la bicicleta se detiene poco a poco <br/>";
        }
    }

    $auto = new Automovil();
    $auto->mover(100);

    
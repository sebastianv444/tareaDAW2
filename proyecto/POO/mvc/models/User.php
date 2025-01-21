<?php

    class User {

        private static $users = [
            ['id'=>1,
            'nombre'=> 'Juanito',
            'email'=>'juanito@gmail.com'],
            ['id'=>2,
            'nombre'=> 'manolita',
            'email'=>'manolita@gmail.com']
        ];

        /* Obtener todos los usuarios aquí consultaría a la base de datos */

        public static function all(){
            return self::$users;
        }

    }
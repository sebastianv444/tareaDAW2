<?php

    //por convención, no es obligatorio llamarlo asi:
    /* 
      En general estos autoload nos ayudan ha no tener que estar requiriendo una a una todas las
      clases en caso tengamos muchas de ellas.
      IMPORTANTE!!: si estas en linux tienes que usar el strtolower() , pero si estas
      en WINDOWS ya no es necesario usar el strlower.
    */
    // el strtolower Devuelve un string con todos los caracteres alfabéticos convertidos a minúsculas.
    function app_autoloader($class){
        require_once "clases/". strtolower($class) . '.php';
    }

    /* 
        el spl_autoload_register() registra cualquier número de autocargadores, posibilitando 
        que las clases e interfaces sean cargadas automáticamente si no están definidas 
        actualmente.
    */
    spl_autoload_register('app_autoloader');
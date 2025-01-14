<?php
//RECUERDA: en PHP solo puedes un constructor.

class Coche
{

    //definimos los atributos o propiedades de la clase.
    private $color;
    public $modelo;
    public $velocidad;
    public $caballos;
    public $plazas;

    /* 
        PHP NO admite implementar varios constructores con distintos parámetros (sobrecarga de métodos)
        podríamos solucionarlo definiendo un sólo constructor que acepte diferente parámetros opcionales y manejar la lógica internamente como lo haremos a continuacion.
    */

    public function __construct($miColor = null, $modelo = null, $velocidad = null, $caballos = null, $plazas = null)
    {
        if ($miColor !== null) {
            $this->color = $miColor;
        }
        if ($modelo !== null) {
            $this->modelo = $modelo;
        }
        if ($velocidad !== null) {
            $this->velocidad = $velocidad;
        }
        if ($caballos !== null) {
            $this->caballos = $caballos;
        }
        if ($plazas !== null) {
            $this->plazas = $plazas;
        }
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($micolor)
    {
        $this->color = $micolor;
    }

    public function acelerar()
    {
        $this->velocidad++;
    }

    public function frenar()
    {
        $this->velocidad--;
    }

    /* es necesario especificarle el objeto que le vamos a pasar para que no de error,
    a esto se le llama tipar. */
    public function mostrarInformacion(Coche $miObjeto){
            $informacion = "<h1>Informacion del coche</h1>";
            $informacion .= "color: " . $miObjeto->color;
            $informacion .= "<br/>Marca: " . $miObjeto->modelo;
            return $informacion;
        }
        
    }

    $coche = new Coche("amarillo","Ferrari",130);
    echo $coche->mostrarInformacion($coche);
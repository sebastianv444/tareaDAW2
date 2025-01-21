<?php

    abstract class Empleado{
        abstract public function calcularSalario();
    }

    class EmpleadoTiempoCompleto extends Empleado{
        private $salario;
        
        public function __construct($salario)
        {
            $this->salario = $salario;
        }

        public function calcularSalario()
        {
            
        }

    }

    class EmpleadoPorHoras extends Empleado{
        private $horasTrabajadas;
        private $tarifa;

        public function __construct($horasTrabajadas,$tarifa)
        {
            $this->horasTrabajadas = $horasTrabajadas;
            $this->tarifa = $tarifa;
        }

        public function calcularSalario()
        {
            
        }

    }
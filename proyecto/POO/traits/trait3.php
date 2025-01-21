<?php

    /* 
        Conflicto entre trait
        ¿qué pasa si dos trait tienen métodos con el mismo nombre?
        PHP permite resolver estos conflictos usando la palabra clave insteadof para
        decidir que método usar
    */

    trait TraitA{
        public function mensaje(){
            echo "mensaje desde TraitA";
        }
    }

    trait TraitB{
        public function mensaje(){
            echo "mensaje desde TraitB";
        }
    }

    class MiClase {
        /* esto nos permite usar el metodo mensaje() pero solo de el TraitA y no del TraitB */
        use TraitA, TraitB {
            TraitA::mensaje insteadOf traitB;
        }
    }

    $trait = new MiClase();
    $trait->mensaje();
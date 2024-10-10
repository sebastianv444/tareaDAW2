<?php
/* 1. - Crea un array llamado $frutas que contenga las siguientes frutas: "Manzana",
"Pera", "Plátano" y "Naranja". Muestra cada fruta en una nueva línea utilizando un bucle
foreach */
function ej1(){
$frutas = ["Manzana","pera","platano","naranja"];

foreach($frutas as $iterador){
    echo "<li>".$iterador."</li>";
};

/* 2.- Al array de frutas del problema anterior, añade dos nuevas frutas: "Kiwi" y "Mango".
Luego, muestra todo el array de nuevo. */

array_push($frutas,"kiwi","Mango");

foreach($frutas as $iterador){
    echo "<li>".$iterador."</li>";
};
};

/* 3.- Crea un array asociativo llamado $productos donde las claves sean nombres de
productos ("Leche", "Pan", "Huevos") y los valores sean sus respectivos precios (1.50,
0.80, 2.10). Luego, muestra cada producto y su precio. */

function ej2(){
$productos = [
    "leche" => 1.50,
    "pan" => 0.80,
    "huevos" => 2.10
];

foreach($productos as $clave => $valor){
    echo $clave . ": ".$valor ."<br>";
}
};

/* 4.- Crea un array llamado $edades que contenga las edades de cinco personas: 25, 30,
18, 40 y 22. Calcula y muestra la media de esas edades. */

function ej3(){
    $edades = [25,30,18,40,22];
    $media = array_sum($edades) / count($edades);
    echo $media;
};

/* 5.-Tienes un array llamado $colores con los valores ["Rojo", "Verde", "Azul", "Amarillo"].
Elimina el segundo elemento ("Verde") del array y muestra el array resultante. */

function ej4(){
    $colores = ["rojo","verde","azul","Amarillo"];
    array_splice($colores,1,1);
    foreach($colores as $iterador){
        echo $iterador;
    }
};

/* 6.- Crea un array bidimensional llamado $alumnos que contenga la siguiente
información: ["Juan", 25], ["Ana", 22], ["Luis", 23]. Muestra el nombre y la edad de cada
alumno. */

function ej5(){
    $bidimensional = [
        ["Juan",25],
        ["Ana",22],
        ["Luis",23]
    ];
    foreach($bidimensional as $fila){
        echo "[";
        foreach($fila as $columna){
            if($columna == ""){
                echo "nombre:";
            }
            echo $columna;
        }
        echo "]</br>";
    }
};
ej5();

/* 7.- Dado el array $nombres con los valores ["Carlos", "Marta", "Luis", "Ana"], verifica si el
nombre "Luis" está presente en el array. Muestra un mensaje indicando si el nombre fue
encontrado o no. */

function ej6(){
    $nombres = ["Carlos","Marta","Luis","Ana"];

    foreach($nombres as $iterador){
        if($iterador == "Luis"){
            echo "el nombre Luis fue encontrado";
        }
    }
};


?>
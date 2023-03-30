<?php

/* PHP soporta los siguientes datos 

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource

*/

/* String */
$x = "String";

echo "Esto es un $x";
echo "<br>";
/* Integer */
$x = 235235;

echo "<br>";
var_dump($x);
echo "<br>";
/* Float */
$x = 10.234;
var_dump($x);
echo "<br>";
/* Boolean */
$x = true;
var_dump($x);
echo "<br>";

/* Array */
$x= array("Volvo", "Bmw", "Chevrolet");
var_dump($x);
echo "<br>";

/* Clases y objetos */

class Car{
    public $color;
    public $model;
    public function __construct($color,$model){
        $this->color = $color;
        $this->model = $model;
    }

    public function mensaje(){
        return "Mi auto es un " . $this->color . " " . $this->model . "!";
    }
}

/* Las clases son una plantilla de objeto y el objeto es una instancia de la clase  */

$miAuto = new Car("Negro","Mazda");
echo $miAuto -> mensaje();
echo "<br>";
var_dump($miAuto);
echo "<br>";

/* Data type Null 
Cuando no se le asigna un valor a una variable es null automaticamente
*/
$x = null;
var_dump($x)

?>
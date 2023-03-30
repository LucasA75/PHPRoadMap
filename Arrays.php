<?php

/* Para crear un array */

array();

/* Sacar el largo de un array */

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

/* Para sacar el valor del index */

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

/* Hacer un loop por los index */

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

/* Hachmap en PHP ... Clave valor */

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.";

/* para iterar un asosiative array php -> hachmap java*/

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}


/* Two dimensional Array */

$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";

/* Aqui se e que primero da la posicion del array y despues la posicion del valor que quiero dentro 
del array  */

/* Ahora con un loop */

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }

/* Funciones para ordenar los ARRAYS */
  
/* sort(); // arregla el arrays in ascending order
rsort(); // arregla el arrays in descending order
asort(); // arregla el associative arrays in ascending order, according to the value
ksort(); // arregla el associative arrays in ascending order, according to the key
arsort(); // arregla el associative arrays in descending order, according to the value
krsort(); // arregla el associative arrays in descending order, according to the key */


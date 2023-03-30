<?php

/* WHILE */
$x = 1;

while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

/* DO WHILE */

$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

/* Recuerda que el do while ejecuta el codigo al menos 1 vez */

/* FOR */

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

/* FOR EACH */

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}

/* otro ejemplo */

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $val) {
    echo "$x = $val<br>";
}



/* BREAK AND CONTINUE */
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "The number is: $x <br>";
}

/* break salta fuera del loop */


for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>";
}

/* continue rompe una iteracion , si una codicion especifica ocurre, y continua con la siguiente iteracion */
/* En otras palabras , salta SOLO esa iteracion cuando eso se cumple , pero sigue haciendo el loop */


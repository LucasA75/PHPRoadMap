<?php

/* -------Strings-------- */

/* El largo del string */
echo strlen("Hello world!"); // outputs 12
echo "<br>";

/* Cuenta las palabras */
echo str_word_count("Hello world!"); // outputs 2
echo "<br>";

/* Devuelve un string reverso */
echo strrev("Hello world!"); // outputs !dlrow olleH
echo "<br>";

/* Busca donde esta el texto especifico y devuelve la posicion de primer match 
si no encuentra nada devuelve false*/
echo strpos("Hello world!", "world"); // outputs 6
echo "<br>";

/* Remplaza algunos caracteres con otros en un string */
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
echo "<br>";

/* -------Numbers------- */

/* Para cambiar los valores de tipo */

// Cambia de float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cambia de string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

/*------ Numbers Math-------------- */
echo "<br>";

echo(pi()); // returns 3.1415926535898
echo "<br>";

/* Encuentra el valor mas alto o el mas bajo */
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
echo "<br>";

/* Convierte de positivo a negativo */
echo(abs(-6.7));  // returns 6.7
echo "<br>";

/* Raiz cuadrada */
echo(sqrt(64));  // returns 8
echo "<br>";

/* Redondea */
echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0
echo "<br>";

/* Random number */
echo(rand());
echo "<br>";
// se puede dar un min y max value
echo(rand(10, 100));


<?php
/* Global and Local Scope */

$xGlobal = 5;
#Usar xGlobal dentro de la funcion arrojara un error
#echo "<p> esta es la variable $xGlobal </p>"; 

function hola(){
    $xLocal = 5;
    echo "Esta es una variable local : $xLocal";
}

hola();


/* Para ocupar una variable global*/

$yGlobal = 3;

echo "<br>";

function suma(){
    global $yGlobal, $xGlobal;

    $y = $yGlobal + $xGlobal;

    echo "La suma es $y";

}

suma();


function otraForma(){
    /* PHP guarda todas las variables globales en un array llamado $Globals[index] */

    $GLOBALS["xGlobal"] = $GLOBALS["xGlobal"] + $GLOBALS["yGlobal"];

}

otraForma();
echo "<br>";
echo "Se cambio el valor de  x = $xGlobal";

/*
Cuando una funcion es ejecutada los valores locales se borran    
Algunas veces queremos que el valor de una variable local no se borre 
Para eso ocupamos el metodo STATIC
*/

function variableStatic(){
    static $staticVar = 0;
    echo $staticVar;
    $staticVar++;
}

echo "<br>";
variableStatic();
echo "<br>";
variableStatic();
echo "<br>";
variableStatic();

/* Tambien se puede utilizar Print ... es parecido a echo pero print tiene un valor de retorno de 1 
asi que puede ser ocupado en expresiones*/

?>
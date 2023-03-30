<?php

/* Una costante es una variable que no puede cambiar */
/* constants are automatically global across the entire script. */

define("GREETING", "Saludos terricola!");
echo GREETING;

/* Array Constant */
echo "<br>";
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];


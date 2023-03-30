<?php

function writeMsg() {
    echo "Hello world!";
  }
  
  writeMsg(); // call the function

  /* PARAMETROS */

  function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");

  /* PD: Recueda que php es un lenguaje loosely typado , por lo que hay cosas que no deberia hacer por
  tipos pero las hace igual porque automaticamente cambia los tipos EJ: */



/* <?php declare(strict_types=1); */
  function addNumbers(int $a, int $b) {
    return $a + $b;
  }
  echo addNumbers(5, "5 days");
  // since strict is enabled and "5 days" is not an integer, an error will be thrown

  /* Esto sin el restring funciona.... pero no deberia xD */


  
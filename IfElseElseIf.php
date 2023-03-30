<?php

/* IF  */

$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}


/* IF ELSE */

$t = date("H");

if ($t < "12") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

/* IF elseif else */

$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

/* SWITCH case */

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
  }

  
<?php
$stringToPrint;
$decider = 1;

if ($decider == 0) {
  $stringToPrint = "Goodbye World!";
} else if ($decider == 1) {
  $stringToPrint = "Hello World!";
}
  echo "
  <head>
  <title>Workshop 1</title>
  <link rel=\"stylesheet\" href=\"style.css\">
  </head>
  <h1>{$stringToPrint}</h1>
  ";
?>
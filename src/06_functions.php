<?php
// To use outer variable, pass it as a parammeter to the function.
$sentence = "Hello World!";

function print_out($value = "no args provided"){
  echo $value;
}

print_out();


// Arrow function

$substraction = fn($n1 = 3, $n2 = 2) => $n1-$n2;

echo $substraction();

?>
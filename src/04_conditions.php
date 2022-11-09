<?php

//Ternary condition (condition ? if true : if false)
$test = 1;
echo empty($test) ? "empty " : "not empty ";

// Coalescing operator
$test2 = null ?? "| other value";
echo $test2;

?>
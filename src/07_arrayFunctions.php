<?php

$fruits = ["apple", "orange", "pear"];

// Get length
count($fruits);

// Search for a value
in_array("apple", $fruits);

// Add to array
array_push($fruits, "grape", "blueberry"); // to the end
array_unshift($fruits,"strawberry"); // to the beginning

// Remove from an array
array_pop($fruits); // end
array_shift($fruits); // beginning

// Split an array
$chunked_fruits = array_chunk($fruits,2);

// Merge two array together
$arr1 = [1,2];
$arr2 = [3,4];
$arr3 = array_merge($arr1,$arr2);
$arr4 = [...$arr1, ...$arr2]; // same as the one above

// Create an associative array
$a = ["key1", "key2"];
$b = ["value of key1", "value of key2"];
$c = array_combine($a, $b);

// Get keys from an associative array
$keys = array_keys($c);



$array_numbers = range(1,20);

// Create a new array based on some other array + changes applied to each value of that other array.
$string_array = array_map( function($value){ return "Number {$value}"; } ,$array_numbers);

// Create a new array based on some other array taking all values that satisfy certain condition from that other array.
$arr_greater_10 = array_filter($array_numbers, function($value){ return $value > 10; });

// Get a value computed from conducting some operations every iteration of looping through an array
// $carry == return from previous iteration
$sum = array_reduce($array_numbers, function($carry, $value){ return $carry + $value; });

print_r($sum);




?>

<?php
  
  // for( $i = 0; $i < 6; $i++ ){
  //   echo "Number" . $i . "<br />";
  // }

  $arr = ["num1", "num2", "num3", "num4", "num5", "num6"];
  $person = [
    "name" => "Ruslan",
    "age" => 19,
  ];

  foreach($person as $key => $value){
    echo $value . " at " . $key . "<br />";
  }

?>
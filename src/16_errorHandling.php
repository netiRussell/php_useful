<?php

function division($denom){
  if(!$denom || !is_int($denom)){
    throw new Exception('Division by zero');
  }

  return 1/$denom;
}

try{
  echo division("asfasf");
} catch( Exception $e ){
  echo "Exception caught by the system: " . $e->getMessage();
}

?>
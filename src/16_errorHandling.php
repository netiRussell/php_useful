<?php

function division($denom){
  if(!$denom){
    throw new Exception('Division by zero');
  } else if(!is_int($denom)){
    throw new Exception('Division by String');
  }

  return 1/$denom;
}

try{
  echo division("asfasf");
} catch( Exception $e ){
  echo "Exception caught by the system: " . $e->getMessage();
}

?>
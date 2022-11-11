<?php

$file = 'extras/test.txt';

if(file_exists($file)){
  // echo readfile($file);

  $handle = fopen($file, 'r');
  $contents = fread($handle,filesize($file));
  fclose($handle);

  echo $contents;

}

$file = 'extras/test2.txt';

if(!file_exists($file)){
  $handle = fopen($file, 'w');
  $contents = 'Test output to custom txt file';
  fwrite($handle, $contents);
  fclose($handle);
}

?>
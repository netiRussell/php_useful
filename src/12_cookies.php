<?php

echo time();

// Set a cookie for one day
if(!isset($_COOKIE['name'])){
  setcookie("name", 'Ruslan', time() + 86400);
} else {
  echo $_COOKIE['name'];
}

// Delete a cookie
setcookie('name', null, time() - 86401 );


?>
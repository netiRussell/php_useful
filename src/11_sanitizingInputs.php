<?php

  if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']); // old and weaker but not depricated approach
    $age = filter_input(INPUT_POST, $_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS); // modern approach
  }

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
  <label for="name">Name: </label>
  <input type="text" name="name">

  <label for="age">Age: </label>
  <input type="text" name="age">

  <input type="submit" value="submit" name="submit">
</form>
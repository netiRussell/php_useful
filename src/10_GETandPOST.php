<?php 
// GET for passing data through URL
// POST for passing data via server

print_r($_GET); ?>

<!-- Example of query string -->
<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=Brad&last_name=abd">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
  <label for="name">Name: </label>
  <input type="text" name="name">

  <label for="age">Age: </label>
  <input type="text" name="age">

  <input type="submit" value="submit" name="submit">
</form>
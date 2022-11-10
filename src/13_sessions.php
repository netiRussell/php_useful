<?php
  session_start();

  if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']); // old and weaker but not depricated approach
    $age = htmlspecialchars($_POST['age']); // modern approach
    
    $_SESSION['username'] = $name;
  }

  if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
  } else{
    echo "Guest";
  }

  // session_destroy(); // Delete session with all the data it has

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
  <label for="name">Name: </label>
  <input type="text" name="name">

  <label for="age">Age: </label>
  <input type="text" name="age">

  <input type="submit" value="submit" name="submit">
</form>
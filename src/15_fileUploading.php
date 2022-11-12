<?php
  print_r($_FILES);

  if( !empty($_FILES['img']) ){
    $file_name = $_FILES['img']['name'];
    $file_size = $_FILES['img']['size'];
    $file_tmp = $_FILES['img']['tmp_name'];
    $file_ext = strtolower(explode(".", $file_name)[1]);

    $allowed_ext = array('png','jpg', 'jpeg', 'gif');
    $target_dir = "extras/${file_name}";

    // Check on extention of the file
    if(in_array($file_ext, $allowed_ext)){
      if( $file_size <= 1000000 ){
        move_uploaded_file($file_tmp, $target_dir);
        echo "<p>Success!</p>";
      } else {
        echo "<p>The file is too large</p>";
      }

    } else {
      echo "<p>Type file is invalid</p>";
    }

    
  } else {
    echo "<p>Please choose a file</p>";
  }
?>

<form id="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
  <label for="img">Select img to submit</label>
  <input type="file" name="img">
  <button style="padding: 10px; border:none; background-color: green; color:#ffffff; cursor:pointer; border-radius:15px;" form="form">Submit</button>
</form>
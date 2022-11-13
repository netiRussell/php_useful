<?php

class User {
  private $name;
  public $age;
  protected $occupation;

  public function __construct($name, $age, $occupation){
    $this->name = $name;
    $this->age = $age;
    $this->occupation = $occupation;
  }

  function set_name($new_name){
    $this->name = $new_name;
  }

  function get_name(){
    return $this->name;
  }
}

$user1 = new User("Alex", 20, "developer");
print_r($user1);

echo $user1->age;
$user1->set_name("Alexx");
echo $user1->get_name();



// Inheritance
class Admin extends User{
  public function __construct($name, $age, $occupation, $title){
    parent::__construct($name, $age, $occupation);
    $this->title = $title;
  }

  function delete_post(){
    echo "Post has been deleted";
  }
}

$admin = new Admin("John", 30, "cms admin", "senior");
$admin->delete_post();


?>
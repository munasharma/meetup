<?php

/*
* Interface NameAbleInterface
* to get user firstname and lastname
*/
interface NameAbleInterface {
  public function getFname();
  public function getLname();
}


/*
* Interface NameAbleInterface
* to get user email
*/
interface EmailAbleInterface {
  public function getEmail();
}


/**
* class UserInfo
* implementations of interface NameAbleInterface, EmailAbleInterface
*/
class UserInfo implements NameAbleInterface, EmailAbleInterface {
  var $name = "Test";
  public function getFname() {
    echo "Firstname\n";
  }
  public function getLname() {
    echo "Lastname\n";
  }
  public function getEmail() {
    echo "Email\n";
  }
  public function info() {
    echo "My name is: {$this->name}\n";
  }
}

/**
* a simple function to describe a user details
*/
function describe($user) {
  if ($user instanceof UserInfo) {
    $user->getFname();
    $user->getLname();
    $user->getEmail();
    $user->info();
  } else {
    die("Invalid user.");
  }
}

// describe these user please
describe(new UserInfo);



?>

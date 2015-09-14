<?php

/**
* An example of login in PHP
*/

interface NameAbleInterface {
  public function getFname();
  public function getLname();
}

interface EmailAbleInterface {
  public function getEmail();
}


/**
* some implementations of users
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

<?php
/*

@Desc Task-1:static method,commiting,pushing to git branch mounisha

@Author anna.asritha@covalensedigital.com

@Date 11/30/2022

*/


class Greeting {
    //static keyword is used for static methos
  static public function welcome() {
    echo "Hello World!";
  }
  public function __construct() {

    //:: ->scope resolution operation
    self::welcome();
  }
}

new greeting();
?>
 
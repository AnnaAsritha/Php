<?php
/*

@Desc Task-1:Traits,commiting,pushing to git branch mounisha

@Author anna.asritha@covalensedigital.com

@Date 11/30/2022

*/


//traits is used when need to get the properties from 2 parent classes
trait text {
public function msg() {
    echo "hello PHP ";
  }
}

class Welcome {
  use text;
}

$obj = new Welcome();
$obj->msg();
?>
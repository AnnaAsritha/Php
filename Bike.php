<?php
class Bike {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$swift = new Bike();
$swift->set_name('Scooty');
$swift->set_color('white');
echo "Name: " . $swift->get_name();
echo "<br>";
echo "Color: " . $swift->get_color();
?>
<?php

class Person {
  public $name;

  public function __construct($name)
  {
    $this->name = $name;
    $this->sluger = $name . str_pad(random_int(1, 100) . '', 3, 0, STR_PAD_LEFT);
  }
}

$person = new Person('khoa');

echo $person->sluger;

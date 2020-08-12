<?php
  namespace Backend\Classes;

  class MyClass {
    private $firstname;
    private $secondname;

    function __construct($first, $second) {
      $this->firstname = $first;
      $this->secondname = $second;
    }

    public function ConcatNames() {
      return $this->firstname . ' ' . $this->secondname;
    }
  }
?>

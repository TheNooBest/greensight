<?php
  namespace Backend;
  include 'MyClass.php';

  if (!isset($_POST['firstname']) || $_POST['firstname'] == '')
    exit;
  if (!isset($_POST['secondname']) || $_POST['secondname'] == '')
    exit;

  $first = $_POST['firstname'];
  $second = $_POST['secondname'];
  $object = new Classes\MyClass($first, $second);
  echo $object->ConcatNames();
?>

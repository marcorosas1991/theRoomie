<?php

$action = filter_input(INPUT_POST, 'action');

if ($action == NULL) {
    $action = 'default';
}

if ($action == 'default') {
  include('pizza.php');
}
elseif ($action == 'confirm') {

  $toppings = filter_input(INPUT_POST, 'topping', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
  $toppings = array();

  if (isset($_POST['topping'])) {
    $toppings = $_POST['topping'];
  }

  function inArray($array, $str) {
    if (count($array) > 0) {
      foreach ($array as $value) {
        if ($value == $str) {
          return true;
        }
      }
    }
    return false;
  }

  include('confirm.php');
}

 ?>

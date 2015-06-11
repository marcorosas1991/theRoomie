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

  include('confirm.php');
}

 ?>

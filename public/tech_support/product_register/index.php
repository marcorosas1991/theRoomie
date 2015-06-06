<?php
// Get your db connection file, be sure it has a new connection to the
// tech support database
require_once('../../../databases.php');
$db = tech_support_link();

// Get the models needed - work will need to be done in both
require('../model/customer_db.php');
require('../model/product_db.php');
require('../model/registration_db.php');

$action = filter_input(INPUT_POST, 'action');

if ($action == NULL) {
    $action = 'login';
}

if ($action == 'login') {
  include('customer_login.php');

} else if ($action == 'register') {
  $email = filter_input(INPUT_POST, 'customer_email', FILTER_VALIDATE_EMAIL);

  if ($email == NULL || $email == FALSE) {
    $customer = NULL;
  } else {
    $customer = get_customer_by_email($email);
  }


  if ($customer == NULL) {
    $message = "There isn't a user with this email, or is an invalid email address.<br>Try again.";
  } else {
    $customer_id = $customer['customerID'];
    $customer_name = $customer['firstName'];
    $customer_last = $customer['lastName'];

    $products = get_products();
  }

  include('product_register.php');

} else if ($action == 'confirm') {
  $customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
  $product_id = filter_input(INPUT_POST, 'product_id');

  if ($customer_id != NULL && $customer_id != FALSE && $product_id != NULL && $product_id != FALSE) {
    $count = add_registration($customer_id, $product_id);
  } else {
    $message = "There was an error registering the product. Try again.";
  }

  include('product_confirmation.php');
}

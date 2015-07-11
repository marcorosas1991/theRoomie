<?php
// Get your database connection file
require_once('../../../databases.php');
$db = tech_support_link();

require('../model/customer_db.php');
require('../model/product_db.php');
require('../model/registration_db.php');

session_start();

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        // Skip login requirement if customer is already logged in
        // Determine the login status in the if statement below

        if ( isset($_SESSION['user_id']) ) {
            $action = 'display_register';
        } else {
            $action = 'display_login';
        }
    }
}

switch ($action) {
    case 'display_login':
        include('customer_login.php');
        break;
    case 'Login':
        // Build the login functionality here
        $username = filter_input(INPUT_POST, 'username', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        if ($username == NULL || $password == NULL) {
          $message = 'Username or Password can not be blank';
          include('customer_login.php');
        } else {

          // gets the user with the provided credentials
          $customer = login_customer($username, $password);

          // if user is not false
          if ($customer != false) {
            // saves into session the id and email
            $_SESSION['user_id'] = $customer['customerID'];
            $_SESSION['email'] = $customer['email'];
            $_SESSION['firstName'] = $customer['firstName'];
            $_SESSION['lastName'] = $customer['lastName'];

            $products = get_products();
            include('product_register.php');

          } else {
            $message = 'Invalid Username or Password';
            include('customer_login.php');
          }
        }

        break;
    case 'display_register':
        // Before moving to the registration page,
        // get the customer information retreived during
        // the login process (part of the session)

        if (isset($_SESSION['user_id'])) {
          $customer['customerID'] = $_SESSION['user_id'];
          $customer['email'] = $_SESSION['email'];
          $customer['firstName'] = $_SESSION['firstName'];
          $customer['lastName'] = $_SESSION['lastName'];

          $products = get_products();
          include('product_register.php');
          break;
        } else {
          include('customer_login.php');
          break;
        }

    case 'register_product':
        // Before registering the product get the
        // customer information retreived during
        // the login process (part of the session)
        $customer['customerID'] = $_SESSION['user_id'];
        $customer['email'] = $_SESSION['email'];
        $customer['firstName'] = $_SESSION['firstName'];
        $customer['lastName'] = $_SESSION['lastName'];

        $product_code = filter_input(INPUT_POST, 'product_code');
        add_registration($customer['customerID'], $product_code);
        $message = "Product ($product_code) was registered successfully.";
        include('product_register.php');
        break;
    case 'logout':
    // Build the logout functionality here

        $_SESSION = array();
        session_destroy();
        header('Location: .');
        break;
}

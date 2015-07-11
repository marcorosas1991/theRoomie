<?php
$log_action = !isset($_SESSION['user_id']) ? 'display_login' : 'logout';
$log_str = !isset($_SESSION['user_id']) ? 'Login' : 'Logout';
?>
<!DOCTYPE html>
<html>

  <!-- the head section -->
  <head>
    <title>SportsPro Technical Support</title>
    <link rel="stylesheet" type="text/css" href="/tech_support2/main.css">
    <meta charset="utf-8">
  </head>

  <!-- the body section -->
  <body>
    <header>
      <h1>SportsPro Technical Support</h1>
      <p>Sports management software for the sports enthusiast</p>

      <div class="login_menu">
        <a href="/tech_support2/product_register/.?action=<?PHP echo $log_action; ?>"><?PHP echo $log_str; ?></a>
      </div>

      <nav>
        <ul>
          <li><a href="/tech_support2/.">Home</a></li>
        </ul>
      </nav>
    </header>

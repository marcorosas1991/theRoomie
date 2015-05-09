<?php

  // get the data from the form
  $description = $_POST['product_description'];
  $price = filter_input(INPUT_POST, 'list_price', FILTER_VALIDATE_FLOAT);
  $discount = filter_input(INPUT_POST, 'discount_percent', FILTER_VALIDATE_INT);

  $error_message = '';
  // validate description
  if (empty($descripcion) == FALSE) {
      $error_message .= 'Description must not be empty';
  }
  // validate price
  if ($price === FALSE ) {
      $error_message .= '<br>Price must be a valid number.';
  } else if ( $price <= 0 ) {
      $error_message .= '<br>Price must be greater than zero.';
  }

  // validate discount
  if ( $discount === FALSE )  {
      $error_message .= '<br>Discount must be a valid whole number.';
  } else if ( $discount > 100 || $discount < 0) {
      $error_message .= '<br>Interest rate must be greater than zero and less or equal to 100.';
  }

  // if an error message exists, go to the index page
  if ($error_message != '') {
      include('index.php');
      exit(); }

  $discountAmount = $price * ($discount / 100);
  $subtotalPrice = $price - $discountAmount;

  $tax = 8;
  $taxPrice = $subtotalPrice * $tax / 100;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $description; ?></span><br>

        <label>List Price:</label>
        <span><?php echo '$'.number_format($price, 2); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo number_format($discount,0).'%'; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo '$'.number_format($discountAmount, 2); ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo '$'.number_format($subtotalPrice, 2); ?></span><br>

        <label>Sales Tax Rate:</label>
        <span><?php echo $tax; ?>%</span><br>

        <label>Sales Tax Amount:</label>
        <span><?php echo '$'.number_format($taxPrice, 2); ?></span><br>

    </main>
</body>
</html>

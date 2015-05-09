<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>Product Discount Calculator</h1>
        <?php
          //get values from if they exist
          if (!isset($description)) { $description = ''; }
          if (!isset($price)) { $price = ''; }
          if (!isset($discount)) { $discount = ''; }

          if (!empty($error_message)) {
            echo '<p class="error">'.$error_message.'</p>';
         }
         ?>
        <form action="display_discount.php" method="post">

            <div id="data">
                <label>Product Description:</label>
                <input type="text" name="product_description" value="<?php echo $description ?>"><br>

                <label>List Price:</label>
                <input type="text" name="list_price" value="<?php echo $price ?>"><br>

                <label>Discount Percent:</label>
                <input type="text" name="discount_percent" value="<?php echo $discount ?>"><span>%</span><br>
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate Discount"><br>
            </div>

        </form>
    </main>
</body>
</html>

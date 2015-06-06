<?php include '../view/header.php'; ?>
<main>

    <h2>Register Product</h2>
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php else:?>

        <form action="." method="post" id="product_register_form">
          <input type="hidden" name="action" value="confirm">

          <label>Customer: </label>
          <input type="hidden" value="<?php echo "$customer_id"; ?>" name="customer_id" />
          <p class="inline"><?php echo $customer_name." ".$customer_last; ?></p>
          <br>
          <label>Product: </label>
          <select name="product_id">
            <?php
              foreach ($products as $product) {
                $productID = $product['productCode'];
                $productName = $product['name'];
                echo "<option value=$productID>$productName</option>";
              }
            ?>
          </select>
          <br>
          <label>&nbsp;</label>
          <input type="submit" value="Register Product" />
        </form>

    <?php endif; ?>

</main>
<?php include '../view/footer.php'; ?>

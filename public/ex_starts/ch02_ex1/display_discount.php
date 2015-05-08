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
        $description = $_POST['product_description'];
        $price = $_POST['list_price'];
        $discount = $_POST['discount_percent'];

        $discountAmount = $price * ($discount / 100);
        $finalPrice = $price - $discountAmount;
        ?>

        <label>Product Description:</label>
        <span><?php echo $description; ?></span><br>

        <label>List Price:</label>
        <span><?php echo '$'.number_format($price, 2); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo number_format($discount, 2).'%'; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo '$'.number_format($discountAmount, 2); ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo '$'.number_format($finalPrice, 2); ?></span><br>

    </main>
</body>
</html>

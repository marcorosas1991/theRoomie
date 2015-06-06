<?php include '../view/header.php'; ?>
<main>

    <h2>Register Product</h2>
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php else:?>

        <p>Product (<?php echo $product_id ?>) was registered successfully.</p>

    <?php endif; ?>

    
</main>
<?php include '../view/footer.php'; ?>

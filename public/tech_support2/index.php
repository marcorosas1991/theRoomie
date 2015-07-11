<?php
$log_action = !isset($_SESSION['user_id']) ? 'display_login' : 'logout';
$log_str = !isset($_SESSION['user_id']) ? 'Login' : 'Logout';
?>

<?php include 'view/header.php'; ?>
<main>

    <h2>Customers</h2>
    <ul>
        <li><a href="product_register">Register Product</a></li>
    </ul>
</main>
<?php include 'view/footer.php'; ?>

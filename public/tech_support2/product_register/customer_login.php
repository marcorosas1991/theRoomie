<?php include '../view/header.php'; ?>
<main>

    <h2>Customer Login</h2>
    <p>You must login before you can register a product.</p>
    <?php if (isset($message)){ echo $message; }?>
    <form action="." method="post">
      <label>Email:</label>
      <input type="text" name="username" />
      <label>Password:</label>
      <input type="password" name="password" />
      <label>&nbsp;</label>
      <input type="submit" name="action" value="Login" />
    </form>


</main>
<?php include '../view/footer.php';
unset($message);
?>

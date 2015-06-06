<?php include '../view/header.php'; ?>
<main>

    <h2>Customer Login</h2>
    <p>You must login before you can register a product.</p>

    <form action="." method="post">
      <input type="hidden" name="action" value="register">

      <label>Email: </label>
      <input type="text" name="customer_email"/>
      <label>&nbsp;</label>
      <input type="submit" value="Login" />
    </form>




</main>
<?php include '../view/footer.php'; ?>

<?php
// db connection
require_once('../../../databases.php');
$db = guitar1link();

// Get IDs to load values
$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

if ($product_id != false && $category_id != false) {
    // Select the product from the database
    $query = 'SELECT * FROM products
                      WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();



    // select assigned category
    $query = 'SELECT *
              FROM categories
              WHERE categoryID = :category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $category = $statement->fetch();
    $statement->closeCursor();

    // select all other categories
    $query = 'SELECT *
              FROM categories
              WHERE categoryID != :category_id
              ORDER BY categoryID';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $categories = $statement->fetchAll();
    $statement->closeCursor();
}

?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Product Manager</h1></header>

    <main>
        <h1>Edit Product</h1>
        <form action="edit_product.php" method="post"
              id="edit_product_form">

            <input type="hidden" name="product_id"
                   value="<?php echo $product['productID']; ?>">

            <label>Category:</label>
            <select name="category_id">
              <option value="<?php echo $category['categoryID']; ?>" selected>
                  <?php echo $category['categoryName']; ?>
              </option>
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select><br>

            <label>Code:</label>
            <input type="text" name="code" value="<?php echo $product['productCode'];?>"><br>

            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $product['productName'];?>"><br>

            <label>List Price:</label>
            <input type="text" name="price" value="<?php echo $product['listPrice'];?>"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
        <p><a href="index.php">View Product List</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>

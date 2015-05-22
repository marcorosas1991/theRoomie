<?php

// Get the product data
$name = filter_input(INPUT_POST, 'category_name');

// Validate inputs
if ($name == null) {
    $error = "Invalid category name. Check name and try again.";
    include('error.php');
} else {
    require_once('../../../databases.php');
    $db = guitar1link();

    // Add the product to the database
    $query = 'INSERT INTO categories
                 (categoryName)
              VALUES
                 (:name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();

    // Display the Category List page
    include('category_list.php');
}
?>

<?php

// Get all the products for the registration dropdown list
function get_products() {
  global $db;

  $query = 'SELECT productCode, name FROM products ORDER BY name';
  $statement = $db->prepare($query);
  $statement->execute();
  $products = $statement->fetchAll();
  $statement->closeCursor();
  return $products;
}

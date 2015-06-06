<?php
// Register the product and associate it with the customer
// Check the registrations table to see what data is expected
function add_registration($customer_id, $product_code) {
  global $db;
  $query = 'INSERT INTO registrations(customerID, productCode, registrationDate)
            VALUES (:customer_id, :product_code, UTC_TIMESTAMP())';
  $statement = $db->prepare($query);
  $statement->bindValue(':customer_id', $customer_id);
  $statement->bindValue(':product_code', $product_code);
  $statement->execute();

  $count = $statement->rowCount();
  $statement->closeCursor();

  return $count;
}
?>

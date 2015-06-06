<?php
// Needed: a function to get a customer by their email address
function get_customer_by_email($email) {
    global $db;

    $query = 'SELECT customerID, firstName, lastName FROM customers
              WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $customer = $statement->fetch();
    $statement->closeCursor();
    return $customer;
}

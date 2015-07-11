<?php
// Create a function to login the customer and retrieve the customer data
// when the login is successful

function login_customer($email,$password) {
  global $db;
  // $password = sha1($email.$password);
  $query = 'SELECT customerID, email, firstName, lastName
            FROM  customers
            WHERE email = :email
            AND password = :password';
  $statement = $db->prepare($query);
  $statement->bindValue(':email', $email);
  $statement->bindValue(':password', $password);
  $statement->execute();
  $user = $statement->fetch();
  $statement->closeCursor();
  return $user;

}

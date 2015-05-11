<?php

session_start();
$_SESSION['var1'] = 'Marco';
$_SESSION['var2'] = 'Rosas';

?>

<!DOCTYPE HTML>
<html>
  <head>
      <link rel="stylesheet" href="/css/style.css">
      <meta charset="UTF-8">
      <title>Session Variables</title>
  </head>
  <body>
    <br>
    <a href="session2.php">Go Session</a>
    <br>
    <a href="session3.php">Unset var</a>
    <br>
    <a href="session4.php">Destroy Session</a>

  </body>
</html>

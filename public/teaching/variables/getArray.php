<!DOCTYPE HTML>
<html>
  <head>
      <link rel="stylesheet" href="/css/style.css">
      <meta charset="UTF-8">
      <title>GET array</title>
  </head>
  <body>
    <?php
    $name = $_GET['name'];
    echo $name."<br>";
    echo $_GET['surname']."<br>";
    ?>

    <br>
    <a href="variablePresentation.php">Back</a>

  </body>
</html>

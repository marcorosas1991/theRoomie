<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Pizza</title>
    <style>
      label, input{
          display: block;
      }
      label[for*=topping],
      input[name*=topping]{
          display: inline;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Pizza Place</h1>
    </header>
    <main>
      <h2>Pizza Toppings</h2>
      <?php
      if (isset($_POST['topping'])) {
        $toppings = $_POST['topping'];

        foreach ($toppings as $key => $value) {
          echo $key .' = '.$value.'<br>';
        }
      } else {
        echo 'No toppings selected.';
      }
       ?>
    </main>
  </body>
</html>

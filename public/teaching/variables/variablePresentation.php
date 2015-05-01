<?php
// Six different types of variables

$i = 15; // integer
$d = 1.5; // double
$b = true;  // boolean
$s = "Hallo Welt";  // string
$a = array('a', 'z');
// object


$sci = -2.5e-3;
$s_q = 'Hola Mundo';
$a2 = array(2 =>'b', 'segundo' => 'y');

  //Considerations
    //case sensitive
    //only letters, numbers, underscores for names
    //names can't start with digit or __
    //not reserved names

// CONSTANTS
define('PI', 3.14159);
define('g', 9.81);

function printV($var) {
  $hallo = "Hallo Welt2<br>";

  echo ${$var};
}


?>
<!DOCTYPE HTML>
<html>
  <head>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="uft-8">
  </head>
  <body>

    <?php
    
    include_once "../../aux/header.php";

    echo 'integer: '.$i.'<br>';
    echo 'double: '.$d.'<br>';
    echo 'boolean: '.$b.'<br>';
    echo 'string: '.$s.'<br>';
    //echo $a.'<br>'; // error
    echo '<br>array: <br>';
    echo $a[0].'<br>';
    echo $a[1].'<br>';
    //echo $a[2].'<br>'; // error

    echo '<br>array2: <br>';
    echo $a2['2'].'<br>';
    echo $a2['segundo'].'<br>';

    echo 'double sci: '.$sci.'<br>';

    echo "<br>'Constants'<br>";
    echo PI.'<br>';
    echo g.'<br>';

    printV('hallo');

    for ($i = 0; $i < 5; $i++) {
      print (($i + 1) * 4).'<br>';
    }
    ?>

    <br>
    <a href="getArray.php?name=Marco&surname=Rosas">Get Example</a>

  </body>
</html>

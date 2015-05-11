<?php

session_start();
unset($_SESSION['var1']);
echo $_SESSION['var2'];

 ?>

 <a href="session.php">back</a>

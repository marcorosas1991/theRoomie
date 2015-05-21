<?php

require_once '../../databases.php';

$link = guitar1link();

if(is_object($link)) {
  echo 'worked';
} else {
  echo 'not worked';
}

 ?>

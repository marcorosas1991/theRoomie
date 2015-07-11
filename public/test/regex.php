<?php

$str = "-lb8rs";
$pattern = '/[az-][^er][^0-3A-Z]/';

echo "<br>".$str."<br>";

echo preg_match($pattern, $str);

$str = "(559) 555-6651";
$pattern = '/\(\d{3}\) \d{3}[a-z-][1-6]{4}/';

echo "<br>".$str."<br>";

echo preg_match($pattern, $str);

?>

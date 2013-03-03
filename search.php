<?php
$list = fopen('address.csv', 'r');

while ($array = fgetcsv($list, 1000, ",")) {
	print_r($array);
	print '<br>';
}

?>

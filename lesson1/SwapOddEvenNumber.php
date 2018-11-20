<?php

$arr = [1, 2, 4, 6, 3, 7, 5, 8];
$len = sizeof($arr);
$i = 0;
$j = $len-1;

while ($i < $j) {
	if ($arr[$i]%2 == 0 && $arr[$j]%2 != 0) {
		$temp = $arr[$i];
		$arr[$i] = $arr[$j];
		$arr[$j] = $temp;
	} elseif ($arr[$i]%2 != 0) {
		$i++;
		continue;
	} elseif ($arr[$j]%2 == 0) {
		$j--;
		continue;
	}
	$i++;
	$j--;
}

foreach ($arr as $key => $value) {
	# code...
	print_r($value . "\t");
}
print_r("\n");

?>

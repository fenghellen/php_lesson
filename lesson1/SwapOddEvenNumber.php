<?php

$arr = [1, 2, 4, 6, 3, 7, 5, 8];

$i = 0;
for ($j=0; $j<sizeof($arr); $j++) {
	if ($arr[$j]%2 != 0) {
		$temp = $arr[$i];
		$arr[$i] = $arr[$j];
		$arr[$j] = $temp;
		$i++;	
	}
}

foreach ($arr as $key => $value) {
	# code...
	print_r($value . "\t");
}
print_r("\n");

?>

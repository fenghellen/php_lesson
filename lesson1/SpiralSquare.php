<?php

$twoD = array(array());

$n = $argv[1];
$val = 1;
$rings = $n/2;

for ($k = 0; $k <= $rings; $k++) {
    #top 
    for($j = $k; $j < $n-1-$k; $j++) 
        $twoD[$k][$j] = $val++;

    #right 
    for($i = $k; $i < $n-1-$k; $i++) 
        $twoD[$i][$n-1-$k] = $val++;

    #bottom
    for($j = $n-1-$k; $j > $k; $j--) 
        $twoD[$n-1-$k][$j] = $val++;

    #left
    for($i = $n-1-$k; $i > $k; $i--) 
        $twoD[$i][$k] = $val++;

}

if ($n % 2 != 0)
    $twoD[$rings][$rings] = $val++;

foreach ($twoD as $arr) {
    ksort($arr);
    foreach ($arr as $key => $value) {
        print_r($value . "\t" );
    }
    print_r("\r\n");
}

?>
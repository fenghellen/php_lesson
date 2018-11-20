<?php

$twoD = array(array());

$n = $argv[1];
$val = 1;
$rings = $n/2;

/*
#top 
for($j = 0; $j < $n-1; $j++) 
    $twoD[0][$j] = $val++;

#right 
for($i = 0; $i < $n-1; $i++) 
    $twoD[$i][$n-1] = $val++;

#bottom
for($j = $n-1; $j > 0; $j--) 
    $twoD[$n-1][$j] = $val++;

#left
for($i = $n-1; $i > 0; $i--) 
    $twoD[$i][0] = $val++;

#top 
for($j = 1; $j < $n-1-1; $j++) 
    $twoD[1][$j] = $val++;

#right 
for($i = 1; $i < $n-1-1; $i++) 
    $twoD[$i][$n-1-1] = $val++;

#bottom
for($j = $n-1-1; $j > 1; $j--) 
    $twoD[$n-1-1][$j] = $val++;

#left
for($i = $n-1-1; $i > 1; $i--) 
    $twoD[$i][1] = $val++;

*/
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
<?php

$time = explode(":", $argv[1]);

$h = $time[0];
$m = $time[1];

if ($h <0 || $h > 23) {
    echo "please input hour between 1 and 23 \n";
    exit();
}

if ($m <0 || $m > 59) {
    echo "please input minute between 1 and 59 \n";
    exit();
}

$angle = ($h%12 * 30 + $m/60 * 30 - $m/60 * 360);

print_r(abs($angle) . "\n");

?>

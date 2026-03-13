<?php
$a = 5;
$b = 8;

echo "Before Swap: a=$a b=$b\n";

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "After Swap: a=$a b=$b\n";
?>

<?php
$num = rand(1,100);

$s1 = sqrt($num);
$s2 = sqrt($num*2);

echo "Random: $num\n";
echo "Square root: $s1\n";
echo "Double sqrt: $s2\n";

echo "Max: ".max($s1,$s2)."\n";
echo "Min: ".min($s1,$s2);
?>

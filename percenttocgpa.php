<?php
$percentage = 75;

$cgpa = $percentage / 9.5;
$sgpa = $cgpa;

echo "Percentage: $percentage\n";
echo "CGPA: ".round($cgpa,2)."\n";
echo "SGPA: ".round($sgpa,2);
?>

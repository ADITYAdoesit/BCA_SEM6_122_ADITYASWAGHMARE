<?php
$dob = "2003-06-15";

$birth = new DateTime($dob);
$today = new DateTime();

$age = $today->diff($birth)->y;

echo "Age = $age years";
?>

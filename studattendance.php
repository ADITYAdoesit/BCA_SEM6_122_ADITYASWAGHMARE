<?php
$total_days = 30;
$present = 24;

$percentage = ($present/$total_days)*100;

echo "Monthly Attendance: $percentage%\n";

$week_total = 5;
$week_present = 4;

$week_percentage = ($week_present/$week_total)*100;

echo "Weekly Attendance: $week_percentage%\n";

$day_present = 1;
$day_percentage = ($day_present/1)*100;

echo "Day Attendance: $day_percentage%";
?>

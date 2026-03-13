<?php
$otp = rand(1000,9999);

echo "Generated OTP: $otp\n";

$user = $otp;

if($user == $otp)
echo "OTP Verified";
else
echo "Invalid OTP";
?>

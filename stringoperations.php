<?php
$str = "madam";
$str2 = "PHP";

echo "Length: ".strlen($str)."\n";
echo "Reverse: ".strrev($str)."\n";

if($str == strrev($str))
echo "Palindrome\n";
else
echo "Not Palindrome\n";

echo "Concatenation: ".$str.$str2."\n";
echo "Substring: ".substr($str,1,3);

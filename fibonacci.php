<?php
$n=10;
$a=0;
$b=1;

echo "$a $b ";

for($i=2;$i<$n;$i++){
$c=$a+$b;
echo "$c ";
$a=$b;
$b=$c;
}
?>

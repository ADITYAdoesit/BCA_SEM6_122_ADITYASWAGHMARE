<?php
function prime($n){
for($i=2;$i<$n;$i++){
if($n%$i==0)
return "Not Prime";
}
return "Prime";
}

echo prime(7);
?>

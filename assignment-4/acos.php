<!-- acos - Arc cosine -->
<?php 
$argument =  0.6;
$value = acos($argument);

echo "acos(" . $argument . ") = " . $value . " radians.<br/>" ;
echo "Pi value = " .pi() . "<br/>";
echo "asos(" . $argument . ") = " .$value/pi()*180 . " degrees<br/>";

?>
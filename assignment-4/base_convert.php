<!-- base_convert — Convert a number between arbitrary bases -->
<?php
$baseConvert = base_convert('abc4545', 16, 2);      //hexadecimal number to binary number convert.
var_dump($baseConvert);
echo '<br/>';
print_r($baseConvert);
echo '<br/>';
echo $baseConvert;
?>
<!-- Result is: 1010101111000100010101000101 -->
<!-- Alias of rtrim() -->
<?php
$str = 'Hello Bangladesh';
echo $str . "<br/>";
echo rtrim($str, 'sh') . "<br/>";
echo ltrim($str, 'He') . "<br/>";
echo trim($str, 'He') . "<br/>";
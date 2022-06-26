<!-- Ceil and Floor -->
<?php
$val_1 = 99.4;
$val_3 = 99.5;
$val_2 = 99.9;

$ceil_1 = ceil($val_1);
$ceil_2 = ceil($val_2);
$ceil_3 = ceil($val_3);

echo "Ceil <br/>";

echo "Result ceil_1: " . $ceil_1 . ".";
echo "<br/>";
echo "Result ceil_1: " . $ceil_2 . ".";
echo "<br/>";
echo "Result ceil_1: " . $ceil_3 . ".";

echo "<hr/>";
echo "Floor <br/>";

$floor_1 = floor($val_1);
$floor_2 = floor($val_2);
$floor_3 = floor($val_3);

echo "Result floor_1: " . $floor_1 . ".";
echo "<br/>";
echo "Result floor_2: " . $floor_2 . ".";
echo "<br/>";
echo "Result floor_3: " . $floor_3 . ".";
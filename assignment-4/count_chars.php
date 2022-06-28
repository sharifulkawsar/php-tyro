<?php

$char = "Dhaka is the capital of Bangladesh!";

foreach (count_chars($char, 1) as $key => $value) {
    echo "There were " . $value . " instance(s) of \"" , chr($key) , "\" in the string.\n <br/>";
}
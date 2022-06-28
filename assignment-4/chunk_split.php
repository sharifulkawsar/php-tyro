<?php

// Base64 Decode

$base64_word = 'SGVsbG8gQmFuZ2xhZGVzaCEgSSBtIHNoYXJpZnVsIGlzbGFtIGthd3NhciEh';
$chunk_split = chunk_split(base64_decode($base64_word));

echo $chunk_split;

echo '<hr/>';

// Base64 Encode

$str = 'Hello, I am Shariful Islam!';
$chunk_split = chunk_split(base64_encode($str));

echo $chunk_split;
<?php
$string = '794613';

$sizeof = strlen($string) - 1;
$result = '';

for ($i = $sizeof; $i >= 0; $i--) {
    $result .= $string[$i];
}

echo md5($result);

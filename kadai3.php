<?php
$array = array(1, 3, 5, 7, 9);
function multipleFunc(array $arr) {
    $result = 1;
    foreach($arr as $value) {
        $result = $result * $value;
    }
    return $result;
}
echo multipleFunc($array);
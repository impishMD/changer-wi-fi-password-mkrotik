<?php
function randomPassword() {
    $alphabet = "ABCDEFGHKLMNOPRSTXYZ123456789"; //
    $len = 8; //
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < $len; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}

echo randomPassword();
?>
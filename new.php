<?php

function capcha() {
    $str = '0123456789QWERTYUIOPASDFGHJKLZXCVBNM';
    $strLength = strlen($str);
    $random = '';
    for ($i = 0; $i < 6; $i++) {
        $random .= $str[rand(0, $strLength - 1)];
    }
    return $random;
   
}
 echo capcha();

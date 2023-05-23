<?php

$senha = filter_input(INPUT_GET, FILTER_DEFAULT);


function createHash($num_caracter = 12)
{

    $char = ",<.>;:/?]}~^´`[{=+-_)(*&¨%$#@!0123456789abcdefghijklmnopqrstuvxywzabcdefghijklmnopqrstuvxywzABCDEFGHIJKLMNOPQRSTUVXYWZABCDEFGHIJKLMNOPQRSTUVXYWZ";

    return mb_substr(str_shuffle($char), 0, $num_caracter);
}


if (empty($senha)) {
    $return = ['status' => false, 'msg' => createHash()];
} else {
    $return = ['status' => true, 'msg' => 'senha não gerada'];
}
echo json_encode($return);

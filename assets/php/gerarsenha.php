<?php

$senha = filter_input(INPUT_GET, 'qtd', FILTER_DEFAULT);


function createHash($num_caracter = 12)
{

    $char = ",<.>;:/?]}~^´`[{=+-_)(*&¨%$#@!0123456789abcdefghijklmnopqrstuvxywzabcdefghijklmnopqrstuvxywzABCDEFGHIJKLMNOPQRSTUVXYWZABCDEFGHIJKLMNOPQRSTUVXYWZ";

    return mb_substr(str_shuffle($char), 0, $num_caracter);
}


if (!empty($senha)) {
    $return = ['status' => false, 'msg' => createHash($senha)];
} else {
    $return = ['status' => true, 'msg' => 'Senha não gerada'];
}
echo json_encode($return);

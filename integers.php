<?php

function massProduce(){ 
    
    //It would take 500 years at 10000 integers per second to have a 50%
    //chance of a collission
    $max = 3000000000000000;
    do{
        $result = floor($max*(hexdec(bin2hex(openssl_random_pseudo_bytes(4)))/0xffffffff));
    }while($result == $max);
    return $result;
}

echo number_format(massProduce(), 0, '.','');
<?php

function massProduce(){	
	
	$max = 3000000000000000;
    do{
        $result = floor($max*(hexdec(bin2hex(openssl_random_pseudo_bytes(4)))/0xffffffff));
    }while($result == $max);
    return $result;
}

echo number_format(massProduce(), 0, '.','');
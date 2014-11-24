<?php

$array = [
    '   oNe        ', 
    '      twO      ', 
    '      thRee      ', 
    '      four      ', 
    '   fiFLSDKJFe     ',
    '    sFSDFOx    ',
    '      sevEVEF      ',
    '      eight'
    ];
foreach ($array as $key => $value) {
    $array[$key] = strtolower(trim($value));
}

$bla = implode($array,);
var_dump($bla);
// echo $bla;



<?php

//читаем текст из файла

//делаем преобразование

//сохраняем текст в файл result.txt


$fucking_data = file_get_contents('hipster.txt');

// var_dump($fucking_data);

$fucking_paragraph = explode("\n\r", $fucking_data);

krsort($fucking_paragraph);


$new_fucking_paragraph = implode($fucking_paragraph, "\n\r\n\r");

// var_dump($new_fucking_paragraph);

$fucking_chibi = str_replace("the", "Чебурашка", $fucking_paragraph);

var_dump($fucking_chibi);

$fucking_file = 'result.txt';

file_put_contents($fucking_file, $fucking_chibi);
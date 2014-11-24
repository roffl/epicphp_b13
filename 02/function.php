<?php

function textByAge($age = 99) {
    if ($age < 20){
        return "young, Jack";
    } else if ($age > 30){
        return "old";
    } else{
        return "middle";
    }
}


for ($i = 1; $i <= 100; $i++){
    $value = textByAge($i);
    echo $value . "</br>";
}


//дз числа фибоначи функция по порядковому нормеу ряда вернут нужное число фибоначи. У функции один параметр - номер в ряду. 
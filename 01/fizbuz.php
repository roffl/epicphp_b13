<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Две скобки</title>
        </head>
<body>

<?php
//можно записать echo $i.'<br/>'
for ($i=0; $i<=100; $i++){
    if ( $i%3 === 0 && $i%5 ===0 ){
        echo "$i 'FizBuz'<br/>";
    } else{
        if($i%3 === 0){
            echo "$i Fizz<br/>";
        } else if($i%5 === 0){
            echo "$i Buzz <br/>";
        }
        else{
            echo "$i<br/>";
        }
    }
}


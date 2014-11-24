<?php

$peoples = array(

    array(
        'name' => 'Adriano0',
        'surname' => 'Chelentano0',
        'city' => 'Taganrog0',
        'email' => 'chelentano@adriano.ru0',
        'vk' => 'vk.com/superchelentano0'
    ),
    array(
        'name' => 'Adriano1',
        'surname' => 'Chelentano12',
        'city' => 'Taganrog12',
        'email' => 'chelentano@adriano.ru12',
        'vk' => 'vk.com/superchelentano12'
    ),
    array(
        'name' => 'Adriano2',
        'surname' => 'Chelentano2',
        'city' => 'Taganrog2',
        'email' => 'chelentano@adriano.ru2',
        'vk' => 'vk.com/superchelentano2'
    ),
    array(
        'name' => 'Adriano3',
        'surname' => 'Chelentano3',
        'city' => 'Taganrog3',
        'email' => 'chelentano@adriano.ru3',
        'vk' => 'vk.com/superchelentano3'
    ),
    array(
        'name' => 'Adriano4',
        'surname' => 'Chelentano4',
        'city' => 'Taganrog4',
        'email' => 'chelentano@adriano.ru4',
        'vk' => 'vk.com/superchelentano4'
    ),
);

echo '<pre>';
print_r($peoples);
echo '</pre';

//фамилия юли
echo '<p>' . $peoples[2]['surname'] . '</br>';
echo '<a href="http://' . $peoples['friend2']['vk'] . '">vk</a>';


foreach ($peoples as $key => $friend){
    echo '<pre>';
    var_dump($friend);
    echo '</pre>';
}
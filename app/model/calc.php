<?php
namespace App\Model;

$arrName = ['Ganesh','Ruchi','Ridhima'];

$count = 0;
foreach($arrName As $name){
    ++$count;

    $str = sayHello($name);

    echo $str.' ';
}

function sayHello($name){
    return "Hi ".$name;
}


<?php
namespace App\Scripts;
use App\Library\Calculator;

class Test{

    public function run(){
        $objCal = new Calculator();
        $res = $objCal->add(1,2);
        echo $res;
    }
}

$objTest = new Test();
$objTest->run();
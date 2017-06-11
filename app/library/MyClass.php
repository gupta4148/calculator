<?php
namespace App\Library;

class MyClass
{
    public $value;


    public function __constructor($val){
        $this->value = $val;
    }

    /*
     * @return int
     */
    public function foo(){
        return $this->value;
    }

    public function doSomething(){
        return 123456;
    }
}
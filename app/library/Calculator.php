<?php
namespace App\Library;

class Calculator{

    public function add($x,$y)
    {
        if (is_numeric($x) && is_numeric($y)) {
            return $x + $y;
        } else {
            throw new \InvalidArgumentException('Number should be numeric');
        }
    }
}
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/5/17
 * Time: 12:13 AM
 */
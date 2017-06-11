<?php

use PHPUnit\Framework\TestCase;
use App\Library\Calculator;

class CalculatorTest extends TestCase
{
    protected $calculator;
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    public function addDataProvider(){
        return [
            [1,1,2],
            [-1,1,0]
        ];
    }

    /**
     * @test
     * @dataProvider addDataProvider
     */
    public function add($x,$y,$res){
        $this->assertEquals($res,$this->calculator->add($x,$y));
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Number should be numeric
     */
    public function AddException(){
        $this->assertEquals(1,$this->calculator->add(1,'a'));
    }
}

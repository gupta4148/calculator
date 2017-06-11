<?php

use App\Library\MyClass;
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30/5/17
 * Time: 11:22 PM
 */
class MyClassTest extends PHPUnit_Framework_TestCase
{

    public function testMock(){
        $mock = Phake::mock('App\Library\MyClass');
        Phake::when($mock)->foo()->thenReturn(42);
        $this->assertEquals(42, $mock->foo());
    }


    public function testReturnSelf(){

        $stub = $this->getMockBuilder(App\Library\MyClass::class)
            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->disableArgumentCloning()
            ->getMock();

        // Configure the stub.
        $stub->expects($this->any())
            ->method('doSomething')
            ->willReturn('foo');

        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals('foo', $stub->doSomething());
    }

}

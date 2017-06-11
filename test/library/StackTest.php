<?php
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     * @small
     */
    public function testPop(array $stack)
    {
        sleep(2);
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
/*
    public function testNotTestAnything(){
        $this->markTestIncomplete("This test is not complete");
    }*/
}
?>
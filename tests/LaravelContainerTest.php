<?php

use Arseto\LumenCQRS\LaravelContainer;

class LaravelContainerTest extends PHPUnit\Framework\TestCase
{
    private $ioc;

    protected function setup()
    {
        $this->ioc = $this->getMockBuilder('Illuminate\Container\Container')
            ->disableOriginalConstructor()
            ->getMock();

        $this->ioc->expects($this->once())
            ->method('make')
            ->with('SomeFakeClass')
            ->willReturn(new SomeFakeClass());
    }

    /** @test */
    public function shouldMake()
    {
        $container = new LaravelContainer($this->ioc);

        $actual = $container->make('SomeFakeClass');
        $this->assertEquals(new SomeFakeClass(), $actual);
    }
}

class SomeFakeClass
{
}

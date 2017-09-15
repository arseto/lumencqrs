<?php

use Arseto\LumenCQRS\QueryBus;

class QueryBusTest extends PHPUnit\Framework\TestCase
{
    private $container;
    private $inflector;

    protected function setup()
    {
        $this->container = $this->getMockBuilder(
            'Arseto\LumenCQRS\Contracts\Container')
            ->getMock();

        $this->container->expects($this->once())
            ->method('make')
            ->with('FakeReader')
            ->willReturn(new FakeReader());

        $this->inflector = $this->getMockBuilder(
            'Arseto\LumenCQRS\Contracts\Inflector')
            ->getMock();

        $this->inflector->expects($this->once())
            ->method('inflectQuery')
            ->with(new FakeQuery())
            ->willReturn('FakeReader');
    }

    /** @test */
    public function shouldHandleQuery()
    {
        $bus = new QueryBus($this->container, $this->inflector);
        $result = $bus->read(new FakeQuery());

        $this->assertEquals('Success', $result);
    }
}


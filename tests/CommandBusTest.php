<?php 

use Arseto\LumenCQRS\CommandBus;

class CommandBusTest extends PHPUnit\Framework\TestCase
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
            ->with('FakeHandler')
            ->willReturn(new FakeHandler());

        $this->inflector = $this->getMockBuilder(
            'Arseto\LumenCQRS\Contracts\Inflector')
            ->getMock();

        $this->inflector->expects($this->once())
            ->method('inflectCommand')
            ->with(new FakeCommand())
            ->willReturn('FakeHandler');
    }

    /** @test */
    public function shouldHandleCommand()
    {
        $bus = new CommandBus($this->container, $this->inflector);
        $result = $bus->execute(new FakeCommand());

        $this->assertEquals('Success', $result);
    }
}

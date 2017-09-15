<?php

use Arseto\LumenCQRS\NameInflector;

class NameInflectorTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function shouldInflectCommand()
    {
        $inflector = new NameInflector();
        $command = new FakeCommand();
        $handler = $inflector->inflectCommand($command);

        $this->assertEquals(FakeHandler::class, $handler);
    }

    /** @test */
    public function shouldInflectQuery()
    {
        $inflector = new NameInflector();
        $query = new FakeQUery();
        $reader = $inflector->inflectQuery($query);

        $this->assertEquals(FakeReader::class, $reader);
    }
}

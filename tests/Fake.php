<?php

use Arseto\LumenCQRS\Contracts\Application\Query;
use Arseto\LumenCQRS\Contracts\Application\Reader;
use Arseto\LumenCQRS\Contracts\Application\Command;
use Arseto\LumenCQRS\Contracts\Application\Handler;

class FakeQuery implements Query
{
}

class FakeReader implements Reader
{
    public function read(Query $q)
    {
        return "Success";
    }
}

class FakeHandler implements Handler
{
    public function handle(Command $command)
    {
        return "Success";
    }
}

class FakeCommand implements Command
{
}

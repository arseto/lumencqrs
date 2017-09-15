<?php

use Arseto\LumenCQRS\Contracts\Query;
use Arseto\LumenCQRS\Contracts\Reader;
use Arseto\LumenCQRS\Contracts\Command;
use Arseto\LumenCQRS\Contracts\Handler;

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

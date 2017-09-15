<?php

namespace Arseto\LumenCQRS\Contracts;

interface Handler
{
    /**
    * Handle a command object
    *
    * @param Command $command
    * @return void
    */
    public function handle(Command $command);
}



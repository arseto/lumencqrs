<?php

namespace Arseto\LumenCQRS\Contracts\Application;

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



<?php

namespace Arseto\LumenCQRS;

use Arseto\LumenCQRS\Contracts\Container;
use Arseto\LumenCQRS\Contracts\Inflector;
use Arseto\LumenCQRS\Contracts\Command;

class CommandBus
{
    /**
     * @var Container
     */
    private $container;

    /**
     * @var Inflector
     */
    private $inflector;

    /**
     * Create a new CommandBus
     *
     * @param Container $container
     * @return void
     */
    public function __construct(Container $container, Inflector $inflector)
    {
        $this->container = $container;
        $this->inflector = $inflector;
    }

    private function handler(Command $command)
    {
        $class = $this->inflector->inflectCommand($command);
        return $this->container->make($class);
    }

    public function execute(Command $command)
    {
        return $this->handler($command)->handle($command);
    }
}


<?php

namespace Arseto\LumenCQRS\Application;

use Arseto\LumenCQRS\Contracts\Application\Container;
use Arseto\LumenCQRS\Contracts\Application\Inflector;
use Arseto\LumenCQRS\Contracts\Application\Query;

class QueryBus
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
     * Create a new QueryBus
     *
     * @param Container $container
     * @return void
     */
    public function __construct(Container $container, Inflector $inflector)
    {
        $this->container = $container;
        $this->inflector = $inflector;
    }

    private function reader(Query $query)
    {
        $class = $this->inflector->inflectQuery($query);
        return $this->container->make($class);
    }

    public function read(Query $query)
    {
        return $this->reader($query)->read($query);
    }
}



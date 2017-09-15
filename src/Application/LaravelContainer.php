<?php

namespace Arseto\LumenCQRS\Application;

use Illuminate\Container\Container as IoC;
use Arseto\LumenCQRS\Contracts\Application\Container;

/**
 * Wraps Laravel IoC container
 */
class LaravelContainer implements Container
{
    /**
    * @var Container
    */
    private $container;

    /**
    * Create a new LaravelContainer
    *
    * @param IoC $container
    * @return void
    */
    public function __construct(IoC $container)
    {
        $this->container = $container;
    }

    /**
    * Resolve the class out of the container
    *
    * @param string $class
    * @return mixed
    */
    public function make($class)
    {
        return $this->container->make($class);
    }
}


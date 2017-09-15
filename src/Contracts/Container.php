<?php

namespace Arseto\LumenCQRS\Contracts;

interface Container
{
    /**
    * Returns a new instance of an object
    *
    * @params string $class
    * @return mixed
    */
    public function make($class);
}


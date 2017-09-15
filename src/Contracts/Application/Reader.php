<?php
namespace Arseto\LumenCQRS\Contracts\Application;

interface Reader
{
    public function read(Query $query);
}

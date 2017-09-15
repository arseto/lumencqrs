<?php
namespace Arseto\LumenCQRS\Contracts;

interface Reader
{
    public function read(Query $query);
}

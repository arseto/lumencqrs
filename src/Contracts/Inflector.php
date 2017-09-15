<?php
namespace Arseto\LumenCQRS\Contracts;

interface Inflector
{
    public function inflectCommand(Command $cmd);
    public function inflectQuery(Query $cmd);
}

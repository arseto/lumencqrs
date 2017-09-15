<?php
namespace Arseto\LumenCQRS\Contracts\Application;

interface Inflector
{
    public function inflectCommand(Command $cmd);
    public function inflectQuery(Query $cmd);
}

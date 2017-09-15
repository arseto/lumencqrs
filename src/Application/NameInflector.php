<?php

namespace Arseto\LumenCQRS\Application;

use Arseto\LumenCQRS\Contracts\Application\Inflector;
use Arseto\LumenCQRS\Contracts\Application\Command;
use Arseto\LumenCQRS\Contracts\Application\Query;

class NameInflector implements Inflector
{
    /**
    * Find a Handler for a Command
    *
    * @param Command $command
    * @return string
    */
    public function inflectCommand(Command $command)
    {
        return str_replace('Command', 'Handler', get_class($command));
    }

    /**
    * Find a Reader for a Query
    *
    * @param Query $query
    * @return string
    */
    public function inflectQuery(Query $query)
    {
        $temp = str_replace('Queries', 'Readers', get_class($query));
        return str_replace('Query', 'Reader', $temp);
    }
}


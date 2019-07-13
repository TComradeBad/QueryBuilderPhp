<?php

namespace tcb\QueryBuilder\Syntax;

use tcb\QueryBuilder\AbstractQuery;

class Update extends AbstractQuery
{
    public function __construct($table)
    {
        $this->query="UPDATE $table";
        return $this;
    }

    public function set($values)
    {
        return new Set($this->query,$values);
    }

}
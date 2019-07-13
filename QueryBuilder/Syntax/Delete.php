<?php

namespace tcb\QueryBuilder\Syntax;


use tcb\QueryBuilder\AbstractQuery;

class Delete extends AbstractQuery
{
    public function __construct()
    {
        $this->query = "DELETE ";
        return $this;
    }

    public function from($tables)
    {
        return new From($tables,$this->query);
    }
}
<?php

namespace tcb\QueryBuilder\Syntax;


use tcb\QueryBuilder\AbstractQuery;

class Drop extends AbstractQuery
{
    public function __construct($table)
    {
        $this->query="DROP TABLE $table";
        return $this;
    }


}
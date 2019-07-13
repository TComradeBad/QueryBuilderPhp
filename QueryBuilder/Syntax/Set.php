<?php

namespace tcb\QueryBuilder\Syntax;


use tcb\QueryBuilder\AbstractQuery;

class Set extends AbstractQuery
{
    public function __construct($query,$values)
    {
        $this->query = $query." SET ";
        foreach ($values as $column => $value)
        {
            $this->query.="$column=$value,";
                    }
        $this->query = substr_replace($this->query," ",-1);

    }

    public function where()
    {
        return new Where($this->query);
    }
}
<?php

namespace tcb\QueryBuilder\Syntax;

use tcb\QueryBuilder\AbstractQuery;


class GroupBy extends AbstractQuery
{

    public function __construct($query, $column)
    {
        $this->query=$query."GROUP BY ".$column." ";
    }

    public function orderBy()
    {
        $order = new OrderBy($this->query);
        return $order;
    }

}
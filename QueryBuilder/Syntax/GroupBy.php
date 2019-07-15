<?php

namespace tcb\QueryBuilder\Syntax;

use tcb\QueryBuilder\AbstractQuery;


class GroupBy extends AbstractQuery
{

    /**
     * Команда GROUP BY
     *
     * @param string $query
     * @param string $column
     */
    public function __construct($query, $column)
    {
        $this->query=$query."GROUP BY ".$column." ";
    }

    /**
     * @return OrderBy
     */
    public function orderBy()
    {
        $order = new OrderBy($this->query);
        return $order;
    }

}
<?php

namespace tcb\QueryBuilder\Syntax;


use tcb\QueryBuilder\AbstractQuery;

class Delete extends AbstractQuery
{
    /**
     * Начало строки DELETE запроса
     *
     * @var string
     */
    public function __construct()
    {
        $this->query = "DELETE ";
        return $this;
    }

    /**
     * Команда FROM
     *
     * @param array $tables
     * @return From
     */
    public function from($tables)
    {
        return new From($tables,$this->query);
    }
}
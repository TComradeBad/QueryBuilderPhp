<?php

namespace tcbQB\QueryBuilder\Syntax;


use tcbQB\QBQueryBuilder\Syntax\From;
use tcbQB\QueryBuilder\AbstractQuery;

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
     * @return \tcbQB\QueryBuilder\Syntax\From
     */
    public function from($tables)
    {
        return new \tcbQB\QueryBuilder\Syntax\From($tables,$this->query);
    }
}
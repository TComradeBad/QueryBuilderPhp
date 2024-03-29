<?php

namespace tcbQB\QueryBuilder\Syntax;

use tcbQB\QueryBuilder\AbstractQuery;

class Update extends AbstractQuery
{
    /**
     * Начало строки UPDATE запроса
     *
     * @param string $table
     */
    public function __construct($table)
    {
        $this->query="UPDATE $table";
        return $this;
    }

    /**
     * Команда SET
     *
     * @param array $values
     * @return Set
     */
    public function set($values)
    {
        return new Set($this->query,$values);
    }

}
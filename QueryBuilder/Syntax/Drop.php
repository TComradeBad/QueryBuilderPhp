<?php

namespace tcbQB\QueryBuilder\Syntax;


use tcbQB\QueryBuilder\AbstractQuery;

class Drop extends AbstractQuery
{
    /**
     * Начало строки DROP запроса
     * @param string $table
     */
    public function __construct($table)
    {
        $this->query="DROP TABLE $table";
        return $this;
    }


}
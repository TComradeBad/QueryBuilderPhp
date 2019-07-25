<?php

namespace tcbQB\QueryBuilder\Syntax;


use tcbQB\QueryBuilder\AbstractQuery;

class Set extends AbstractQuery
{
    use WhereTrait;
    /**
     * Set constructor.
     * @param string $query
     * @param array $values
     */
    public function __construct($query, $values)
    {
        $this->query = $query . " SET ";
        foreach ($values as $column => $value) {
            $this->query .= "$column=$value,";
        }
        $this->query = substr_replace($this->query, " ", -1);

    }
}
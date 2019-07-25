<?php

namespace tcbQB\QueryBuilder\Syntax;

/**
 * Дополнительные методы для WHERE в SELECT запросе
 * @package tcb\QueryBuilder\Syntax
 */

trait GroupByOrderByTrait
{
    /**
     * @return OrderBy
     */
    public function orderBy()
    {
        $order = new OrderBy($this->query);
        return $order;
    }

    /**
     * @param string $column
     * @return GroupBy
     */
    public function groupBy($column)
    {
        $group = new GroupBy($this->query,$column);
        return $group;
    }

}
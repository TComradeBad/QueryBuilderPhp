<?php
/**
 * Created by PhpStorm.
 * User: Комрад
 * Date: 13.07.2019
 * Time: 18:20
 */

namespace tcb\QueryBuilder\Syntax;


trait GroupByOrderByTrait
{
    public function orderBy()
    {
        $order = new OrderBy($this->query);
        return $order;
    }

    public function groupBy($column)
    {
        $group = new GroupBy($this->query,$column);
        return $group;
    }

}
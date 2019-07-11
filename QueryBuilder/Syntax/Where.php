<?php

namespace tcb\QueryBuilder\Syntax;

use tcb\QueryBuilder\AbstractQuery;
use tcb\QueryBuilder\Syntax\OrderBy;
use tcb\QueryBuilder\Syntax\GroupBy;

class Where extends AbstractQuery{

    public function __construct($query)
    {
        $this->query=$query."WHERE";
    }

    public function greaterThan($var1,$var2,$logicalOp = "")
    {
        $this->query.=$logicalOp." ($var1 > $var2) " ;
        return $this;
    }

    public function lesserThan($var1,$var2,$logicalOp = "")
    {
        $this->query.=$logicalOp." ($var1 < $var2) ";
        return $this;

    }

    public function equals($var1,$var2,$logicalOp = "")
    {
        $this->query.=$logicalOp." ($var1 = $var2) ";
        return $this;
    }

    public function notEquals($var1,$var2,$logicalOp = "")
    {
        $this->query.=$logicalOp." ($var1 != $var2) ";
        return $this;
    }

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
<?php

namespace QueryBuilder\Syntax;

require_once PROJECT_PATH."/QueryBuilder/AbstractQuery.php";
require_once PROJECT_PATH."/QueryBuilder/Syntax/OrderBy.php";
require_once PROJECT_PATH."/QueryBuilder/Syntax/GroupBy.php";
use QueryBuilder\AbstractQuery;
use QueryBuilder\Syntax\OrderBy;
use QueryBuilder\Syntax\GroupBy;

class WHERE extends AbstractQuery{

    private $logicOpIsset = false;

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
<?php

namespace tcb\QueryBuilder\Syntax;

use tcb\QueryBuilder\AbstractQuery;
use tcb\QueryBuilder\Syntax\OrderBy;
use tcb\QueryBuilder\Syntax\GroupBy;

class Where extends AbstractQuery
{
    /**
     * Команда WHERE
     * @param string $query
     */
    public function __construct($query)
    {
        $this->query=$query."WHERE";
    }

    /**
     * Условие "Больше"
     *
     * @param string $var1
     * @param int,string $var2
     * @param string $logicalOp
     * @return $this
     */
    public function greaterThan($var1,$var2,$logicalOp = "")
    {
        $this->query.="$logicalOp ($var1 > $var2) " ;
        return $this;
    }

    /**
     * Условие "Меньше"
     *
     * @param string $var1
     * @param int,string $var2
     * @param string $logicalOp
     * @return $this
     */
    public function lesserThan($var1,$var2,$logicalOp = "")
    {
        $this->query.="$logicalOp ($var1 < $var2) ";
        return $this;

    }

    /**
     * Условие "Равно"
     *
     * @param string $var1
     * @param int,string $var2
     * @param string $logicalOp
     * @return $this
     */
    public function equals($var1,$var2,$logicalOp = "")
    {
        $this->query.="$logicalOp ($var1 = $var2) ";
        return $this;
    }

    /**
     * Условие "Не равно"
     *
     * @param string $var1
     * @param int,string $var2
     * @param string $logicalOp
     * @return $this
     */
    public function notEquals($var1,$var2,$logicalOp = "")
    {
        $this->query.="$logicalOp ($var1 != $var2) ";
        return $this;
    }

    /**
     * @return string
     */
    public function get()
    {
        $this->query = substr_replace($this->query,"",-1);
        return parent::get(); // TODO: Change the autogenerated stub
    }
}
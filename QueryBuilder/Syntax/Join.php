<?php
/**
 * Created by PhpStorm.
 * User: Комрад
 * Date: 01.08.2019
 * Time: 14:39
 */

namespace tcbQB\QueryBuilder\Syntax;
use tcbQB\QueryBuilder\AbstractQuery;

class Join extends AbstractQuery
{
    protected $table_name;

    public function __construct($table_name,$side, $query)
    {
        $this->query = $query;
        switch ($side)
        {
            case "left" : $this->query.= "LEFT JOIN $table_name ";
            break;
            case "right" : $this->query.= "RIGHT JOIN $table_name ";
            break;
            case "inner" : $this->query.= "INNER JOIN $table_name ";
            break;
        }
    }

    public function on($first_row,$second_row)
    {
        return new On($first_row,$second_row,$this->query);

    }

}
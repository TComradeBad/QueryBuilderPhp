<?php

namespace tcbQB\QueryBuilder\Syntax;

use tcbQB\QueryBuilder\AbstractQuery;
use tcbQB\QueryBuilder\Syntax\WhereForSelect;
use tcbQB\QueryBuilder\Syntax\WhereTrait;

class From extends AbstractQuery
{
    use WhereForSelectTrait;
    /**
     * Команда FROM
     * @param array,string $tables
     * @param string $query
     */
    public function __construct($tables,$query)
    {
        $this->query=$query;
        $this->query=$this->query."FROM ";
        if(gettype($tables)==="array")
        {
            foreach ($tables as $table)
            {
                $this->query.=$table.",";
            }
            $this->query=substr_replace($this->query,' ',-1);
        }else
        {
            $this->query.=$tables." ";
        }


    }


    public function leftJoin($table_name)
    {
        return new Join($table_name,"left",$this->query);

    }

    public function innerJoin($table_name)
    {
        return new Join($table_name,"inner",$this->query);
    }

    public function rightJoin($table_name)
    {
        return new Join($table_name,"right",$this->query);
    }
}
<?php

namespace tcb\QueryBuilder\Syntax;

use tcb\QueryBuilder\AbstractQuery;
use tcb\QueryBuilder\Syntax\WhereForSelect;

class From extends AbstractQuery
{

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

    public function where()
    {
        $where = new WhereForSelect($this->query);
        return $where;
    }

}
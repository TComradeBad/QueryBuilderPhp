<?php

namespace tcb\QueryBuilder\Syntax;

use tcb\QueryBuilder\AbstractQuery;
use tcb\QueryBuilder\Syntax\Where;

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
        $where = new Where($this->query);
        return $where;
    }

}
<?php

namespace QueryBuilder\Syntax;
require_once PROJECT_PATH."/QueryBuilder/AbstractQuery.php";
require_once PROJECT_PATH."/QueryBuilder/Syntax/WHERE.php";
use QueryBuilder\AbstractQuery;
use QueryBuilder\Syntax\WHERE;

class FROM extends AbstractQuery
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
        $where = new WHERE($this->query);
        return $where;
    }

}
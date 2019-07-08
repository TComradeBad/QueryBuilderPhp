<?php

namespace QueryBuilder\Syntax;

require_once PROJECT_PATH."/QueryBuilder/AbstractQuery.php";
use QueryBuilder\AbstractQuery;

class Drop extends AbstractQuery
{
    public function __construct($table)
    {
        $this->query="DROP TABLE $table";
        return $this;
    }


}
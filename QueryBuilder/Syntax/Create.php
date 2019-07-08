<?php

namespace QueryBuilder\Syntax;

require_once PROJECT_PATH."/QueryBuilder/AbstractQuery.php";
use QueryBuilder\AbstractQuery;

class Create extends AbstractQuery
{
    public function __construct($table)
    {
        $this->query="CREATE TABLE $table";
        return $this;
    }

}
<?php

namespace QueryBuilder;

require_once PROJECT_PATH."/QueryBuilder/Syntax/Select.php";
require_once PROJECT_PATH."/QueryBuilder/Syntax/Insert.php";
use QueryBuilder\Syntax\Select;
use QueryBuilder\Syntax\Insert;

class QueryBuilder {


    public function __construct()
    {
        
    }

    public function select($colums = null)
    {
        $query = new Select($colums);
        return $query;
    }
    
    
    
    public function insert($table,$columns)
    {
        $query = new Insert($table,$columns);
        return $query;
    }
    
    
    
    public function delete()
    {

    }
    
    
    
    public function update()
    {

    }
    
    
    
}

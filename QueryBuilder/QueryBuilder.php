<?php

namespace QueryBuilder;

require_once PROJECT_PATH."/QueryBuilder/Syntax/Select.php";
use QueryBuilder\Syntax\Select;

class QueryBuilder {


    public function __construct()
    {
        
    }

    public function select($colums = null)
    {
        $query = new Select($colums);
        return $query;
    }
    
    
    
    public function insert()
    {
        
    }
    
    
    
    public function delete()
    {
        
    }
    
    
    
    public function update()
    {
        
    }
    
    
    
}

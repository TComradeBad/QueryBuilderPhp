<?php

namespace QueryBuilder;

require_once PROJECT_PATH."/QueryBuilder/Syntax/Select.php";
require_once PROJECT_PATH."/QueryBuilder/Syntax/Insert.php";
require_once PROJECT_PATH."/QueryBuilder/Syntax/Drop.php";
require_once PROJECT_PATH."/QueryBuilder/Syntax/Create.php";
use QueryBuilder\Syntax\Select;
use QueryBuilder\Syntax\Insert;
use QueryBuilder\Syntax\Drop;
use QueryBuilder\Syntax\Create;

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
    
    
    
    public function delete($table)
    {

    }
    
    
    
    public function update()
    {

    }

    public function drop($table)
    {
        $query = new Drop($table);
        return $query;
    }

    public function create($table)
    {
        $query = new Create($table);
        return $query;
    }
    
    
}

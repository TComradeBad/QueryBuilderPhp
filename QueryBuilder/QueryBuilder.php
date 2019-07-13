<?php

namespace tcb\QueryBuilder;

use tcb\QueryBuilder\Syntax\Select;
use tcb\QueryBuilder\Syntax\Insert;
use tcb\QueryBuilder\Syntax\Drop;
use tcb\QueryBuilder\Syntax\Create;
use tcb\QueryBuilder\Syntax\Update;

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
    
    
    
    public function update($table)
    {
        $query = new Update($table);
        return $query;

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

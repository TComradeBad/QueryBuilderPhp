<?php

namespace tcb\QueryBuilder;

use tcb\QueryBuilder\Syntax\Delete;
use tcb\QueryBuilder\Syntax\Select;
use tcb\QueryBuilder\Syntax\Insert;
use tcb\QueryBuilder\Syntax\Drop;
use tcb\QueryBuilder\Syntax\Create;
use tcb\QueryBuilder\Syntax\Update;

class QueryBuilder {


    public function __construct()
    {
    }

    /**
     * @param string null $colums
     * @return Select
     */
    public function select($colums = null)
    {
        $query = new Select($colums);
        return $query;
    }

    /**
     * @param string $table
     * @param string $columns
     * @return Insert
     */
    public function insert($table,$columns)
    {
        $query = new Insert($table,$columns);
        return $query;
    }

    /**
     * @return Delete
     */
    public function delete()
    {
        $query = new Delete();
        return $query;
    }

    /**
     * @param string $table
     * @return Update
     */
    public function update($table)
    {
        $query = new Update($table);
        return $query;
    }

    /**
     * @param string $table
     * @return Drop
     */
    public function drop($table)
    {
        $query = new Drop($table);
        return $query;
    }

    /**
     * @param string $table
     * @return Create
     */
    public function create($table)
    {
        $query = new Create($table);
        return $query;
    }
    
    
}

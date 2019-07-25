<?php

namespace tcbQB\QueryBuilder;

use tcbQB\QueryBuilder\Syntax\Delete;
use tcbQB\QueryBuilder\Syntax\Select;
use tcbQB\QueryBuilder\Syntax\Insert;
use tcbQB\QueryBuilder\Syntax\Drop;
use tcbQB\QueryBuilder\Syntax\Create;
use tcbQB\QueryBuilder\Syntax\Update;

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
     * @param array $columns
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

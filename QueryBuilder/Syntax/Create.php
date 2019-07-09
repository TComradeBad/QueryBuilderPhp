<?php

namespace QueryBuilder\Syntax;

require_once PROJECT_PATH."/QueryBuilder/AbstractQuery.php";
use QueryBuilder\AbstractQuery;

class Create extends AbstractQuery
{
    private $tables = null;

    public function __construct($table)
    {
        $this->query = "CREATE TABLE $table";
        return $this;
    }


    public function columnsArray($columns)
    {
        foreach ($columns as $column => $types) {
            $this->tables .= "$column $types,";
        }
    }

    public function char($name,$size,$options=null)
    {
        $this->tables.="$name CHAR($size) $options,";
        return $this;

    }

    public function varchar($name,$size,$options=null)
    {
        $this->tables.="$name VARCHAR($size) $options,";
        return $this;
    }

    public function text($name,$options=null)
    {
        $this->tables.="$name TEXT $options,";
        return $this;
    }

    public function blob($name,$options=null)
    {
        $this->tables.="$name BLOB $options,";
        return $this;
    }

    public function float($name,$d=2,$options=null)
    {
        $this->tables.="$name FLOAT($d) $options,";
        return $this;
    }

    public function decimal($name,$d=2,$options=null)
    {
        $this->tables.="$name DECIMAL($d) $options,";
        return $this;
    }

    public function integer($name,$options=null)
    {
        $this->tables.="$name INTEGER $options,";
        return $this;
    }

    public function date($name,$options=null)
    {
        $this->tables.="$name DATE $options,";
        return $this;
    }

    public function timestamp($name,$options=null)
    {
        $this->tables.="$name TIMESTAMP $options,";
        return $this;
    }

    public function time($name,$options=null)
    {
        $this->tables.="$name TIME $options,";
        return $this;
    }

    public function datetime($name,$options=null)
    {
        $this->tables.="$name DATETIME $options,";
        return $this;
    }

}
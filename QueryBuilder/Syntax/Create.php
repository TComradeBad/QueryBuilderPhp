<?php

namespace tcbQB\QueryBuilder\Syntax;


use phpDocumentor\Reflection\Types\Array_;
use SebastianBergmann\CodeCoverage\TestFixture\C;
use tcbQB\QueryBuilder\AbstractQuery;

class Create extends AbstractQuery
{
    /**
     * Дополнительно поле со значениями названий и типов данных колонок
     * в создаваемой тпблице
     */
    private $tables = null;

    /**
     * Начало строки CREATE запроса
     *
     * Create constructor.
     * @param string $table
     */
    public function __construct($table)
    {
        $this->query = "CREATE TABLE $table";
        return $this;
    }

    /**
     * Заполнение названий и тиров данных колонок таблицы по массиву
     * "название колонки" => "тип данных и дополнительные параметры"
     *
     * @param array $columns
     * @return Create $this
     */
    public function columnsArray($columns)
    {
        foreach ($columns as $column => $types) {
            $this->tables .= "$column $types,";
        }
        return $this;
    }

    /**
     * Колонка с типом данных CHAR
     *
     * @param string $name
     * @param integer $size
     * @param string null $options
     * @return Create $this
     */
    public function char($name,$size,$options=null)
    {
        $this->tables.="$name CHAR($size)";
        if(isset($options))
        {
            $this->tables.=" $options";
        }
        $this->tables.=",";
        return $this;

    }

    /**
     * Колонка с типо даных VARCHAR
     *
     * @param string $name
     * @param integer $size
     * @param string null $options
     * @return Create $this
     */
    public function varchar($name,$size,$options=null)
    {
        $this->tables.="$name VARCHAR($size)";
        if(isset($options))
        {
            $this->tables.=" $options";
        }
        $this->tables.=",";
        return $this;
    }


    /**
     * Колонка с типом данных TEXT
     *
     * @param string $name
     * @param string null $options
     * @return Create $this
     */
    public function text($name,$options=null)
    {
        $this->tables.="$name TEXT";
        if(isset($options))
        {
            $this->tables.=" $options";
        }
        $this->tables.=",";
        return $this;
    }

    /**
     * Колонка с типом данных BLOB
     * @param string $name
     * @param string null $options
     * @return Create $this
     */
    public function blob($name,$options=null)
    {
        $this->tables.="$name BLOB";
        if(isset($options))
        {
            $this->tables.=" $options";
        }
        $this->tables.=",";
        return $this;
    }

    /**
     * Колонка с типом данных FLOAT
     *
     * @param string $name
     * @param int $d
     * @param string null $options
     * @return Create $this
     */
    public function float($name,$d=2,$options=null)
    {
        $this->tables.="$name FLOAT($d)";
        if(isset($options))
        {
            $this->tables.=" $options";
        }
        $this->tables.=",";
        return $this;
    }

    /**
     * Колонка с типом данных DECIMAL
     *
     * @param string $name
     * @param int $d
     * @param string null $options
     * @return Create $this
     */
    public function decimal($name,$d=2,$options=null)
    {
        $this->tables.="$name DECIMAL($d)";
        if(isset($options))
        {
            $this->tables.=" $options";
        }
        $this->tables.=",";
        return $this;
    }

    /**
     * Колонка с типом данных INTEGER
     *
     * @param string $name
     * @param string null $options
     * @return Create $this
     */
    public function integer($name,$options=null)
    {
        $this->tables.="$name INTEGER";
        if(isset($options))
        {
            $this->tables.=" $options";
        }
        $this->tables.=",";
        return $this;
    }

    /**
     * Колонка с типом данных DATE
     *
     * @param string $name
     * @param  string null $options
     * @return Create $this
     */
    public function date($name,$options=null)
    {
        $this->tables.="$name DATE";
        if(isset($options))
        {
            $this->tables.=" $options";
        }
        $this->tables.=",";
        return $this;
    }

    /**
     * Колонка с типом данных TIMESTAMP
     *
     * @param string $name
     * @param string null $options
     * @return Create $this
     */
    public function timestamp($name,$options=null)
    {
        $this->tables.="$name TIMESTAMP";
        if(isset($options))
        {
            $this->tables.=" $options";
        }
        $this->tables.=",";
        return $this;
    }

    /**
     * Колонка с типом данных TIME
     *
     * @param string $name
     * @param string null $options
     * @return Create $this
     */
    public function time($name,$options=null)
    {
        $this->tables.="$name TIME";
        if(isset($options))
        {
            $this->tables.=" $options";
        }
        $this->tables.=",";
        return $this;
    }

    /**
     * Колонка с типом данных DATETIME
     *
     * @param string $name
     * @param string null $options
     * @return Create $this
     */
    public function datetime($name,$options=null)
    {
        $this->tables.="$name DATETIME";
        if(isset($options))
        {
            $this->tables.=" $options";
        }
        $this->tables.=",";
        return $this;
    }

    /**
     * Обозначение колонки с первичным ключом
     * @param string $name
     * @return Create $this
     */
    public function primaryKey($name)
    {
        $this->tables.="PRIMARY KEY($name),";
        return $this;
    }

    /**
     * @return string
     */
    public function get()
    {
        $this->tables=substr_replace($this->tables,"",-1);
        $this->query.="($this->tables)";
        return parent::get(); // TODO: Change the autogenerated stub
    }

}
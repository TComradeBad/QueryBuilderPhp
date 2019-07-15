<?php

namespace tcb\QueryBuilder\Syntax;

use tcb\QueryBuilder\AbstractQuery;

class Insert extends  AbstractQuery
{
    /**
     * Дополнительное поле со значениями добавляемой в таблицу строки
     *
     * @var string
     */
    private $values;

    /**
     * Начало строки INSERT запроса
     *
     * @param string $table
     * @param array $columns
     */
    public function __construct($table,$columns)
    {
        $this->query="INSERT INTO $table(";
        if(is_array($columns))
        {

            foreach ($columns as $column)
            {
                $this->query.="$column,";
            }
            $this->query=substr_replace($this->query,'',-1);

        }else
        {
            $this->query.=$columns;
        }
        $this->query.=") ";
        return $this;
    }

    /**
     * Команда VALUES c перечнем значений создаваемой строки
     *
     * $values может иметь вид строки для одной колонки, массива для нескольких колонок
     * или двумерного массива для создания нескольких строк в таблице
     *
     * @param string, array $values
     * @return Insert $this
     */
    public function values($values)
    {
        $valueOneSize=null;
        $valueDoubleSize=null;

        if(!is_string($values))
        {
            foreach($values as $valueFirstlevel)
            {
                if(is_array($valueFirstlevel))
                {
                    $valueDoubleSize.="(";
                    foreach ($valueFirstlevel as $valueSecondlevel)
                    {
                        $valueDoubleSize.="$valueSecondlevel,";
                    }
                    $valueDoubleSize=substr_replace($valueDoubleSize,"",-1);
                    $valueDoubleSize.="),";

                }else
                {
                    $valueOneSize.="$valueFirstlevel,";
                }

            }

            /**
             * Массив должен содержать только другие одномерные массивы, либо строки
             */
            if(isset($valueDoubleSize))
            {
                $valueDoubleSize=substr_replace($valueDoubleSize,"",-1);
                $this->values=$valueDoubleSize;
                $this->values="VALUES ".$this->values;
            }else
            {
                if(isset($valueOneSize))
                {
                    $valueOneSize=substr_replace($valueOneSize,"",-1);
                    $valueOneSize="($valueOneSize)";
                    $this->values=$valueOneSize;
                    $this->values="VALUES ".$this->values;
                }
            }
        }else
        {
            $this->values=$values;
            $this->values="VALUES ($this->values)";
        }




        return $this;
    }

    /**
     * @return string
     */
    public function get()
    {
        $this->query.=$this->values;
        return parent::get(); // TODO: Change the autogenerated stub
    }


}
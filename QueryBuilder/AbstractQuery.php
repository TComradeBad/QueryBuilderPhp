<?php

namespace tcbQB\QueryBuilder;

abstract class AbstractQuery{

    /**
     * @var null Строка sql запроса в базу данных
     */
    protected $query = null;

    /**
     * @return string
     */
    public function get()
    {
        return $this->query.";";
    }

    /**
     * @param $string
     * @return string
     */
    static public function sqlString($string)
    {
        return '\''."$string".'\'';
    }


}

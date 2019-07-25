<?php
/**
 * Created by PhpStorm.
 * User: Комрад
 * Date: 25.07.2019
 * Time: 17:32
 */

namespace tcbQB\QueryBuilder\Syntax;


trait WhereTrait
{
    public function where()
    {
        return new Where($this->query);
    }

}
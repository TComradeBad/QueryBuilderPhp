<?php
/**
 * Created by PhpStorm.
 * User: Комрад
 * Date: 15.07.2019
 * Time: 16:55
 */

namespace tcb\QueryBuilder\Syntax;


class FromForDelete extends From
{

    public function where()
    {
       return new Where($this->query);
    }

}
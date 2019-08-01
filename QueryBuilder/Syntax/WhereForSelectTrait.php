<?php
/**
 * Created by PhpStorm.
 * User: Комрад
 * Date: 01.08.2019
 * Time: 15:08
 */

namespace tcbQB\QueryBuilder\Syntax;


trait WhereForSelectTrait
{

    /**
     * Команда WHERE
     *
     * @return \tcbQB\QueryBuilder\Syntax\WhereForSelect
     */
    public function where()
    {
        $where = new WhereForSelect($this->query);
        return $where;
    }
}
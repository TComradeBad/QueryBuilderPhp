<?php

namespace tcbQB\QueryBuilder\Syntax;

/**
 * Класc WHERE входящий в цепочку SELECT запрса
 * @package tcb\QueryBuilder\Syntax
 */
class WhereForSelect extends Where
{
    use GroupByOrderByTrait;

}
<?php

use PHPUnit\Framework\TestCase;
use tcb\QueryBuilder\QueryBuilder;

class DeleteTest extends TestCase
{
    public function deleteProvider()
    {
        $br = new QueryBuilder();
        return [
            [
                "DELETE FROM table WHERE (id = 1);",

                $br->delete()->from("table")->where()->equals("id",1)->get()
            ],
            [
                "DELETE FROM table1,table2 WHERE (id = 1) XOR (author = 'Neil Young');",

                $br->delete()->from(["table1","table2"])->where()->equals("id",1)
                    ->equals("author",\tcb\QueryBuilder\AbstractQuery::sqlString("Neil Young"),"XOR")->get()
            ]
        ];
    }

    /**
     * @dataProvider deleteProvider
     */
    public function testDeleteQuery($excepted,$query)
    {
        $this->assertSame($excepted,$query);
    }


}
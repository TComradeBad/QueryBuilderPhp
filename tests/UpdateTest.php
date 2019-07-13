<?php

use PHPUnit\Framework\TestCase;
use tcb\QueryBuilder\QueryBuilder;
use tcb\QueryBuilder\AbstractQuery;

class UpdateTest extends TestCase
{

    public function updateProvider()
    {
        $br = new QueryBuilder();
        return [
            [
                "UPDATE songs SET title='Heaven and hell' WHERE (id = 1);",

                $br->update("songs")->set(['title' => AbstractQuery::sqlString("Heaven and hell")])
                    ->where()->equals("id",1)->get()
            ],
            [
                "UPDATE songs SET title='Heaven and hell',author='Black Sabbath' WHERE (id = 1);",

                $br->update("songs")->set(
                    [
                        'title' => AbstractQuery::sqlString("Heaven and hell"),
                        'author' => AbstractQuery::sqlString("Black Sabbath")
                    ])
                    ->where()->equals("id",1)->get()
            ]
        ];
    }

    /**
     * @dataProvider updateProvider
     */
    public function testUpdateQuery($excepted,$query)
    {
        $this->assertSame($excepted,$query);
    }

}

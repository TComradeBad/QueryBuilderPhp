<?php

use PHPUnit\Framework\TestCase;
use tcbQB\QueryBuilder\QueryBuilder;



class SelectTest extends TestCase
{
    public function selectProvider()
    {
        $br = new QueryBuilder();
        return [
            [
                "SELECT * FROM table WHERE (x > 2);",

                $br->select("*")->from("table")->where()->greaterThan("x",2)->get()
            ],

            [
                "SELECT id,name FROM table1,table2 WHERE (x = 2) AND (y < 2);",

                $br->select(["id","name"])->from(["table1","table2"])->where()->equals("x",2)
                    ->lesserThan("y",2,"AND")->get()
            ],

            [
                "SELECT column,count(name) AS name count FROM table WHERE (x != 'Heaven and Hell') GROUP BY column ORDER BY column ASC;",

                $br->select("column")->count("name","name count")->from("table")
                    ->where()->notEquals("x",\tcbQB\QueryBuilder\AbstractQuery::sqlString('Heaven and Hell'))
                    ->groupBy("column")->orderBy()->asc("column")->get()
            ]

    ];
}

    /**
     * @dataProvider  selectProvider
     */

    public function testSelectQuery($expected, $query)
    {
        $this->assertSame($expected,$query);
    }

}
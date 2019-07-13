<?php

use PHPUnit\Framework\TestCase;
use tcb\QueryBuilder\QueryBuilder;



class SelectTest extends TestCase
{
    public function SelectProvider()
    {
        $br = new QueryBuilder();
        return [
            ["SELECT * FROM table WHERE (x > 2);",
                $br->select("*")->from("table")->where()->greaterThan("x",2)->get()],

            ["SELECT id,name FROM table1,table2 WHERE (x = 2) AND (y < 2);",
                $br->select(["id","name"])->from(["table1","table2"])->where()->equals("x",2)
                    ->lesserThan("y",2,"AND")->get()],

            ["SELECT column,count(name) AS name count FROM table WHERE (x != 2) GROUP BY column ORDER BY column ASC;",
                $br->select("column")->count("name","name count")->from("table")
                    ->where()->notEquals("x",2)->groupBy("column")->orderBy()->asc("column")->get()]

    ];
}

    /**
     * @dataProvider  SelectProvider
     */

    public function testSelectQuery($expected, $query)
    {
        $this->assertSame($expected,$query);
    }

}
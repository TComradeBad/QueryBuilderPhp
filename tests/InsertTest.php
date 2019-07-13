<?php

use PHPUnit\Framework\TestCase;
use tcb\QueryBuilder\QueryBuilder;

class InsertTest extends TestCase
{
    public function insertProvider()
    {
        $br = new QueryBuilder();
        return [
            ["INSERT INTO table(name) VALUES (DIO);",
                $br->insert("table","name")->values("DIO")->get()
            ],

            ["INSERT INTO table(name,subname) VALUES (DIO,BRANDO);",
                $br->insert("table",["name","subname"])->values(["DIO","BRANDO"])->get()
            ],

            ["INSERT INTO table(name,subname) VALUES (DIO,BRANDO),(DOOM,GUY),(SILVER,FANG);",
                $br->insert("table",["name","subname"])
                    ->values([
                        ["DIO","BRANDO"],
                        ["DOOM","GUY"],
                        ["SILVER","FANG"]
                    ])->get()
            ]
        ];
    }

    /**
     * @dataProvider insertProvider
    */
    public function testInsertQuery($excepted,$query)
    {
        $this->assertSame($excepted,$query);
    }

}
<?php

use PHPUnit\Framework\TestCase;
use tcb\QueryBuilder\QueryBuilder;

class CreateTest extends TestCase
{
    public function createProvider()
    {
        $br = new QueryBuilder();
        return [
            [
                "CREATE TABLE table(id INTEGER NOT NULL PRIMARY KEY,name VARCHAR(20),text TEXT,doc BLOB);",

                $br->create("table")->columnsArray(
                    [
                        "id" => "INTEGER NOT NULL PRIMARY KEY",
                        "name" => "VARCHAR(20)",
                        "text" => "TEXT",
                        "doc" => "BLOB"
                    ])->get()
            ],
            [
                "CREATE TABLE table(id INTEGER NOT NULL AUTO_INCREMENT,name VARCHAR(20),text TEXT,doc BLOB,PRIMARY KEY(id));",

                $br->create("table")->integer("id","NOT NULL AUTO_INCREMENT")
                    ->varchar("name",20)->text("text")->blob("doc")->primaryKey("id")->get()
            ]
        ];
    }

    /**
     * @dataProvider createProvider
     */
    public function testCreateQuery($excepted,$query)
    {
        $this->assertSame($excepted,$query);
    }


}
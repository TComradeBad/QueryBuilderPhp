<?php

use PHPUnit\Framework\TestCase;
use tcbQB\QueryBuilder\QueryBuilder;

class JoinTest extends TestCase
{
    public function joinProvider()
    {
        $br = new QueryBuilder();

        return [
            [
                "SELECT songs.id,song.title FROM songs LEFT JOIN authors ON songs.author_id=authors.id;",
                $br->select(["songs.id","song.title"])->from("songs")
                    ->leftJoin("authors")->on("songs.author_id","authors.id")->get()
            ],
            [
                "SELECT songs.id,song.title FROM songs RIGHT JOIN authors ON songs.author_id=authors.id;",
                $br->select(["songs.id","song.title"])->from("songs")
                    ->rightJoin("authors")->on("songs.author_id","authors.id")->get()
            ],
            [
                "SELECT songs.id,song.title FROM songs INNER JOIN authors ON songs.author_id=authors.id;",
                $br->select(["songs.id","song.title"])->from("songs")
                    ->innerJoin("authors")->on("songs.author_id","authors.id")->get()
            ]
        ];
    }

    /**
     * @dataProvider joinProvider
     */
   public function testJoinQuery($excepted,$query)
   {
       $this->assertSame($excepted,$query);
   }
}
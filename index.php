<?php

require __DIR__."/vendor/autoload.php";

/*
$link = mysqli_connect('localhost','comrade','password','musicDB');

if(mysqli_connect_errno()){
    echo "ERROR ".mysqli_connect_errno();
}else{
    echo "Успешное подключение".PHP_EOL;

    $sql="SELECT * From songs";
    $result = mysqli_query($link,$sql);
    $songs = mysqli_fetch_all($result,1);
    echo print_r($songs);
 }
echo "\n";
*/
 
$builder = new tcb\QueryBuilder\QueryBuilder();
$query = $builder->select(["id","name","author"])->from(["songs"])
    ->where()->lesserThan("id",5)
    ->greaterThan("id",2,"AND")->groupBy("id")
    ->orderBy()->asc("id")->desc("title")->get();


echo $query.PHP_EOL;

$query = $builder->select()->max("id")->count("music","album")->asColumns(["id"=>"number"])
    ->from("songs")->get();

echo $query.PHP_EOL;

$query = $builder->insert("songs",["id","title"])->values([["1","hello"],["2","bye"]])->get();

echo $query.PHP_EOL;

$query = $builder->insert("songs","id")->values("1")->get();

echo $query.PHP_EOL;




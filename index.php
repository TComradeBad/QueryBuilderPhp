<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/QueryBuilder/QueryBuilder.php';


/*
$link = mysqli_connect('localhost','comrade','password','musicDB');

if(mysqli_connect_errno()){
    echo "ERROR ".mysqli_connect_errno();
}else{
    echo "Успешное подключение".PHP_EOL;

    $sql="SELECT * FROM songs";
    $result = mysqli_query($link,$sql);
    $songs = mysqli_fetch_all($result,1);
    echo print_r($songs);
 }
echo "\n";
*/
 
 

$builder = new QueryBuilder\QueryBuilder();
$query = $builder->select()->from()->get();

echo $query.PHP_EOL;
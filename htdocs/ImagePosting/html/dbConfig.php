<?php

$dbName = "mysql:host=insta_copy_db;dbname=imagePosting;charset=utf8";
$userName = "root";

try{
    $db = new PDO($dbName, $userName);
    var_dump("success");
} catch (\Throwable $th){
    var_dump("失敗");
    exit();
}
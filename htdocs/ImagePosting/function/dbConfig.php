<?php

$dbName = "mysql:host=insta_copy_db;dbname=imagePosting;charset=utf8";
$userName = "root";
$db_password = "root";

#コンソールログにデバックログを出力するためのクラス
function console_log($data){
    echo '<script>';
    echo 'console.log('.json_encode($data).')';
    echo '</script>';
  }

try{
    $db = new PDO($dbName, $userName, $db_password);
    console_log("DBの接続が出来ました。");
} catch (\Throwable $th){
    console_log("DBの接続に失敗しました。");
    exit();
}
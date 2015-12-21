<?php


use yxdj\network\Stream;

$root = __DIR__;

require($root . '/lib/Stream.php');



// 检测当前目录，获取应用配置
$path = realpath('./');
if (file_exists($path . '/yuan37.conf.php')) {
    $config = require($path . '/yuan37.conf.php');
} else {
    echo 'not find current config file...';
    exit;
}





$http = new Stream;

echo $http->get($config['get'])->getKeyword();


function br(){
    echo "\r\n";
}
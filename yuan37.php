<?php


use yxdj\network\Stream;

$root = __DIR__;

require($root . '/lib/Stream.php');



// ��⵱ǰĿ¼����ȡӦ������
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
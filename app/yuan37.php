<?php

use yxdj\network\Stream;



$config = [
    'test' => 'yuan37',
    'get' => 'http://www.qq.com'
];



$http = new Stream;

echo $http->get($config['get'])->getKeyword();
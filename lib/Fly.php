<?php
/**
 * @link https://github.com/yxdj
 * @copyright Copyright (c) 2014 xuyuan All rights reserved.
 * @author xuyuan <1184411413@qq.com>
 */

namespace yxdj\network;

use yxdj\network\Cli;

class Fly
{
    private static $params;
    

    
    public static function getParams($argv, $argc)
    {
        if (self::$params) {
            return self::$params;
        } else {
            return self::$params = Cli::parseArgs($argv, $argc);
        }

    }
    
    
    public static function run($cmd, $route, $params, $path)
    {
        $routes = explode('/', $route, 2);
        print_r($routes);
        
        
    }
    
    
    
    
    
    
    
    
}

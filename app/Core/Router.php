<?php
namespace App\Core;

class Router
{
    public function __construct()
    {
//        dd('d');
    }

    private static function getUrl(){
        return $_SERVER['REQUEST_URI'];
    }

    private static function getMatches($pattern){
        $url = self::getUrl();

        if (preg_match($pattern,$url, $matches)){
            return $matches;
        }
        return false;
    }

    public static function get($pattern, $callback){
        $pattern = "~{$pattern}$~";
        $params  = self::getMatches($pattern);

        if ($params){
            $functionArguments = array_slice($params,1);
            if (is_callable($callback)){
                if (is_array($callback)){
                    $className = $callback[0];
                    $methodName = $callback[1];
                    $instance = $className::getInstance();
                    $instance->$methodName(...$functionArguments);

                }else{
                    $callback(...$functionArguments);
                }
            }else{
                if (is_array($callback)){
                    $className = $callback[0];
                    $methodName = $callback[1];
                    $instance = $className::getInstance();
                    $instance->$methodName(...$functionArguments);
                }
            }
        }


    }

}
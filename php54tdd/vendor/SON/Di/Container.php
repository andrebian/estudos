<?php

namespace SON\Di;


class Container 
{
    
    private static function getDb() 
    {
        $db = new \PDO("mysql:host=localhost;dbname=php54tdd;", "root", "masterkey");
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        
        return $db;
    }
    
    public function getClass($name, $data = '')
    {
        $str_class = "\\App\\Models\\".ucfirst($name);
        
        if ($data) {
            $class = new $str_class(self::getDb(), $data);
        } else {
            $class = new $str_class(self::getDb());
        }
        
        return $class;
    }
}

?>

<?php

namespace SON\Init;

class Bootstrap {

    protected $routes;


    public function __construct() {
        $ar['index'] = ['route' => '/', 'controller' => 'index', 'action' => 'index'];
        $ar['xpto'] = ['route' => '/xpto', 'controller' => 'xpto', 'action' => 'index'];
        $ar['home'] = ['route' => '/home', 'controller' => 'index', 'action' => 'index'];
        $this->setRoutes($ar);
        
        $this->run($this->getUrl());
    }
    
    
    /**
     * 
     * @param array $routes
     */
    public function setRoutes(array $routes) {
        $this->routes = $routes;
    }
    
    /**
     * 
     * @param string $url
     */
    protected  function run($url) {
        array_walk($this->routes, function($route) use ($url) {
            if ( $url == $route['route']) {
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                $controller = new $class;
                $controller->$route['action']();
            }
        });
    }


    /**
     * 
     * @return type
     */
    protected function getUrl() {
        $pattern = '#([a-zA-Z0-9\/]+)(\?.*)?#';
        $x = preg_replace($pattern, '$1', $_SERVER['REQUEST_URI']);
        return $x;
        
        #return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
    
}

?>

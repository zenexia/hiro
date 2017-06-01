<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-30
 * Time: 11:54
 */

namespace Hiro\Apps;

use ZMC\Controllers\FrontController;
use ZMC\Http\Request;
use ZMC\Http\Response;
use ZMC\Routing\Dispatcher;
use ZMC\Routing\RouteAction;
use ZMC\Routing\Router;

class WebApplication implements ApplicationInterface
{

    protected $appRoot;
    protected $routeCollection;

    public function __construct(string $appRoot = '')
    {
        if(!empty($appRoot)){
            $this->appRoot = $appRoot;
        }else{
            $this->appRoot = dirname(dirname(__FILE__));
        }
    }

    public function addRoutes(string $routeFile)
    {
        $this->routeCollection = require_once $this->appRoot . $routeFile;
    }

    public function run(){
        try{
            $request = new Request("$_SERVER[REQUEST_URI]", ['Main Page']);

            $response = new Response($this->appRoot . "/App/Views/");

            $router = new Router($this->routeCollection);

            $dispatcher = new Dispatcher();

            $frontController = new FrontController($router, $dispatcher);

            $frontController->run($request, $response);
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }
}
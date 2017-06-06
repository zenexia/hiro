<?php

/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:11
 */
namespace Hiro\Routing;
use Hiro\Controllers\ControllerInterface;
use Hiro\Controllers\ControllerNotFoundException;
use Hiro\Http\RequestInterface;
use Hiro\Http\ResponseInterface;

class RouteAction extends Route
{

    protected $controller;
    protected $action;
    const BASE_PATH = 'App\Http\Controllers\\';

    public function __construct(
        string $path,
        string $controller,
        string $action = 'index',
        string $name = '',
        string $method = 'ANY',
        array $paramDefaults = [],
        array $conditions = []
    ) {
        parent::__construct($path, $name, $method, $paramDefaults, $conditions);
        $this->controller = $controller;
        $this->action = $action;
    }

    public function getController(RequestInterface $request, ResponseInterface $response):ControllerInterface {
        $controller = self::BASE_PATH . $this->controller . 'Controller';
        //make sure the class exists
        if(!class_exists($controller)){
            throw new ControllerNotFoundException("Controller class $controller does not exist", 2356);
        }
        return new $controller($request, $response);
    }

    public function getAction(){
        return $this->action;
    }

}
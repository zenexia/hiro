<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:02
 */

namespace Hiro\Controllers;


use ZMC\Http\RequestInterface;
use ZMC\Http\ResponseInterface;

class ViewController implements ControllerInterface
{
    protected $request;
    protected $response;

    public function __construct(RequestInterface $request, ResponseInterface $response)
    {
        $this->request = $request;
        $this->response = $response;

    }
    public function before(){
        echo "View before<br>";
    }
    public function after(){

    }

}
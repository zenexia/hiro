<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:02
 */

namespace Hiro\Controllers;


use Hiro\Http\RequestInterface;
use Hiro\Http\ResponseInterface;

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

    }
    public function after(){

    }

}
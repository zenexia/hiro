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

class RestrictedController implements ControllerInterface
{
    protected $request;
    protected $response;

    public function __construct(RequestInterface $request, ResponseInterface $response)
    {
        if(isset($_SESSION['user'])){
            $this->request = $request;
            $this->response = $response;
        }else{
           return $this->response->redirect("login");
        }



    }
    public function before(){

    }
    public function after(){

    }

}
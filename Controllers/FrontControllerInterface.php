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
use Hiro\Routing\DispatcherInterface;
use Hiro\Routing\RouterInterface;

interface FrontControllerInterface
{
    public function __construct(RouterInterface $router,DispatcherInterface $dispatcher);
    public function run(RequestInterface $request, ResponseInterface $response);
}
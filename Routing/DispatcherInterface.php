<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:12
 */
namespace Hiro\Routing;

use Hiro\Http\RequestInterface;
use Hiro\Http\ResponseInterface;

Interface DispatcherInterface {

    public function dispatch(RouteInterface $route, RequestInterface $request,ResponseInterface $response);

}
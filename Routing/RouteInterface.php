<?php

/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:11
 */
namespace Hiro\Routing;
use ZMC\Controllers\ControllerInterface;
use ZMC\Http\RequestInterface;

Interface RouteInterface {
    public function match(RequestInterface $request);
}
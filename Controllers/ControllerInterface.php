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

interface ControllerInterface
{
    public function __construct(RequestInterface $request, ResponseInterface $response);
}
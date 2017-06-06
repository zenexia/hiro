<?php

/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:11
 */
namespace Hiro\Routing;
use Hiro\Controllers\ControllerInterface;
use Hiro\Http\RequestInterface;

class RouteRedirect extends Route
{

    protected $redirectTo;

    public function __construct(
        string $path,
        string $redirectTo,
        string $name = '',
        string $method = 'ANY',
        array $paramDefaults = [],
        array $conditions = []
    ) {
        parent::__construct($path, $name, $method, $paramDefaults, $conditions);
        $this->redirectTo = $redirectTo;
    }

    public function getUrl():string {
        return $this->redirectTo;
    }

}
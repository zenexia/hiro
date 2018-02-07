<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-30
 * Time: 10:43
 */

namespace Hiro\Views;


class View implements ViewInterface
{

    public function __construct(string $basePath)
    {
        $this->basePath = $basePath;
    }

    public function addComponent(string $templateFile){

    }

    private function compose(){

    }

    public function render(){

    }

}
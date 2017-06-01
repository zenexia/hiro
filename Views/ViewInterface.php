<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-30
 * Time: 10:42
 */

namespace Hiro\Views;


interface ViewInterface
{
    public function __construct(string $basePath);

    public function addComponent(string $component);

    public function render();

}
<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-30
 * Time: 11:53
 */

namespace Hiro\Apps;


interface ApplicationInterface
{
    public function __construct(string $appRoot = '');
    public function run(string $viewsPath);
}
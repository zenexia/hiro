<?php
/**
 * Created by ahmad.
 * Project: bukkal
 * Date: 2017-05-23
 * Time: 16:21
 */

namespace Hiro\Services;


use ZMC\Files\FileScout;

class ListDirContentService
{
    protected $basePath;
    protected $fs;

    public function __construct(string $path)
    {
        $this->basePath = $path;
    }

    public function getFullList(){
        if(!isset($this->fs)){
            $this->fs = new FileScout($this->basePath);
        }
    }
}
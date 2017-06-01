<?php

/**
 * Created by ahmad.
 * Project: bukkal
 * Date: 2017-05-23
 * Time: 15:20
 */
namespace Hiro\Files;

class ImagickThumb implements ImageThumb
{
    protected $filePath;

    public function __construct(string $imageFilePath)
    {
        $this->filePath = $imageFilePath;
    }

}
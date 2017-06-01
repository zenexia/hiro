<?php
/**
 * Created by ahmad.
 * Project: bukkal
 * Date: 2017-05-23
 * Time: 15:44
 */
namespace Hiro\Files;

class FileScout
{
    protected $baseDir;

    public function __construct(\DirectoryIterator $baseDir)
    {
        if(!$baseDir->valid()){
            throw new \InvalidArgumentException("The parameter supplied is not a valid argument. Please provide a valid DirectoryIterator object whose physical path can be verified.", 109);
        }
        $baseDir->rewind();
        $this->baseDir = $baseDir;
    }


}
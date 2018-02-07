<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-25
 * Time: 14:18
 */

namespace App\Session;


class Session
{
    public function __construct()
    {
        session_start();

    }

    public function get(string $key){
        if(!$this->has($key)){
            throw new \Exception("Doesn't exist", 12);
        }else{
            return $_SESSION[$key];
        }
    }

    public function has(string $key){
        return isset($_SESSION[$key]);
    }

}
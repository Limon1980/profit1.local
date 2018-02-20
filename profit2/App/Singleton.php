<?php
/**
 * Created by PhpStorm.
 * User: GABEL
 * Date: 20.02.2018
 * Time: 19:50
 */

namespace App;


trait Singleton
{


    protected static $instance;

    protected function __construct()
    {

    }

    public static function instance()
    {
        if(null === static::$instance){
            static::$instance = new static;
        }
        return static::$instance;
    }

}
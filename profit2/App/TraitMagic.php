<?php
/**
 * Created by PhpStorm.
 * User: GABEL
 * Date: 27.02.2018
 * Time: 21:06
 */

namespace App;


Trait TraitMagic
{

    protected $data = [];

    /**
     * @param string $key
     * @param mixed $value
     * @return void
     */

    public function __set($key, $value)
    {
        $this->data[$key] = $value;

    }

    /**
    * @param string $key
    * @return mixed
     */

    public function __get($key)
    {
        return $this->data[$key];
    }

    /**
     * @param string $key
     * @return boolean
     */
    public function __isset($key)
    {
        return isset($this->data[$key]);
    }
}
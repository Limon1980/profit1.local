<?php
/**
 * Created by PhpStorm.
 * User: GABEL
 * Date: 03.03.2018
 * Time: 18:20
 */

namespace App;


trait ArrayObjAccess
{
    protected $_container = array();

    public function __construct($array = null)
    {
        if (!is_null($array)) {
            $this->_container = $array;
        }
    }

    public function offsetExists($offset)
    {
        return isset($this->_container[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->_container[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->_container[] = $value;
        } else {
            $this->_container[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->_container[$offset]);
    }


}
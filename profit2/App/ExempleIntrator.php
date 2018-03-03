<?php
/**
 * Created by PhpStorm.
 * User: GABEL
 * Date: 03.03.2018
 * Time: 20:25
 */

namespace App;


class ExempleIntrator
    implements \Iterator
{

    protected $storage = [];

    public function set($key, $val)
    {
        $this->storage[$key] = $val;
    }

    public function get($key)
    {
        return $this->storage[$key];
    }

    public function current()
    {
        return current($this->storage);
    }

    public function key()
    {
        return key($this->storage);
    }

    public function next(): void
    {
        next($this->storage);
    }

    public function rewind(): void
    {
        reset($this->storage);
    }

    public function valid(): bool
    {
        return null !== key($this->storage);
    }

}
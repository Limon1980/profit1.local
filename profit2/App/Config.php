<?php


namespace App;


class Config
{
    use Singleton;
    protected  $configfile;
    public $data;

    protected function __construct()
    {
        $this->configFile = __DIR__ . '/../Config/config.php';
        $this->data = require $this->configFile;

    }
}
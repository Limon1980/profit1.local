<?php
namespace App;
class Controller
{
    /**
     * @var \App\View
     */
    protected $view;
    public function __construct()
    {
        $this->view = new View();
    }
}
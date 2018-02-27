<?php
/**
 * Created by PhpStorm.
 * User: GABEL
 * Date: 21.02.2018
 * Time: 22:56
 */

namespace App;


class View
    implements \Countable
{
//    //protected $name;
//    protected $data;
//    public function __construct() { }
//    public function get_model_name()
//    {
//        (!empty($name)) ? $name : 'index.php';
//    }
//    public function assign($name, $value)
//    {
//        //$this->name = $name;
//        $this->data[$name] = $value;
//    }
//
//    public function display($template)
//    {
//        echo $this->render($template);
//        //$model = $this;
////        $value = $this->data[$template];
////        include __DIR__ . '/../templates/' . $template;
//    }
//
//    public function render($template)
//    {
//        ob_start();
//        foreach ($this->data as $var => $value){
//            $$var = $value;
//        }
//        include __DIR__ . '/../templates/' . $template;
//        $content = ob_get_contents();
//        ob_end_clean();
//        return $content;
//
//
////        return __DIR__ . '/../templates/' . $template;
//    }


    /**
    * Trait TraitMagic
     */
     
    use \App\TraitMagic;

    public function render($template)
    {
        ob_start();
        foreach ($this->data as $prop => $value){
            $$prop = $value;
        }

        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    /**
    * @param $template string Путь к шаблону
    */
    public function display($template)
    {
        echo $this->render($template);
    }

    public function count()
    {
        return count($this->data);
    }

}
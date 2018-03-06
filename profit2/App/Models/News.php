<?php

namespace App\Models;


use App\Model;
/**
*   Class News
* @package App\Models
*
* @property \App\Models\Author $author
 */
class News extends Model

{

    const TABLE = 'news';

    public $id;
    public $author_id;
    public $title;
    public $text;


    public function __get($k)
    {
        switch ($k) {
            case 'author':
                return Author::findById((int)$this->author_id);
            default:
                return null;
        }
    }
    public function __isset($k)
    {
        switch ($k) {
            case 'author':
                return !empty($this->author_id);
            default:
                return false;
        }
    }
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
    public function setAuthor($id)
    {
        if (!empty($id)) {
            $this->author_id = $id;
        }
    }
    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        if (!empty($title)) {
            $this->title = $title;
        }
    }
    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        if (!empty($text)) {
            $this->text = $text;
        }
    }

    public function fill($data)
    {
        $this->title = $data['title'] ?? $this->title;
        $this->text = $data['text'] ?? $this->text;
        $this->name = $data['author_id'] ?? $this->author_id;
        return $this;
    }

}
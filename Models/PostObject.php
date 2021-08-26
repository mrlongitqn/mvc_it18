<?php


class PostObject
{
    public $title;
    public $category_id;
    public $detail;
    public function __construct($title,$category_id, $detail)
    {
        $this->title = $title;
        $this->category_id = $category_id;
        $this->detail = $detail;
    }
}
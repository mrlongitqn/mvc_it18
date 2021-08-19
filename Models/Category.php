<?php


class Category
{
    public $id;
    public $name;
    public $desc;
    public $data = [];

    function LoadData(){
        return $this->data;
    }
    function Add(Category $category){
        array_push($this->data, $category);
    }
    function Find($id){
        return $this->data[$id];
    }

}
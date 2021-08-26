<?php
require_once SYSTEM_PATH . '/Models/Category.php';

class CategoryController
{
    private $categoryModel;

    public function __construct()
    {
            $this->categoryModel = new Category();
    }

    function Index()
    {
        $data = $this->categoryModel->GetList();
        require_once SYSTEM_PATH.'/Views/Category/index.php';
    }

    function Add()
    {
        require_once SYSTEM_PATH . '/Views/Category/add.php';
    }

    function SaveAdd(){
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $kq = $this->categoryModel->Add($name, $desc);
        if($kq)
            header('Location: http://localhost/mvc_it18/index.php?c=Category');
        else
            header('Location: http://localhost/mvc_it18/index.php?c=Category&a=Add');
    }

    function Edit()
    {
        $id = $_GET['id'];
        $data = $this->categoryModel->GetById($id);
        require_once SYSTEM_PATH . '/Views/Category/edit.php';
    }

    function SaveUpdate(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $result = $this->categoryModel->Update($id, $name, $desc);
        if($result)
            header('Location: http://localhost/mvc_it18/index.php?c=Category');
        else
            header('Location: http://localhost/mvc_it18/index.php?c=Category&a=Update&id='.$id);
    }

    function Delete()
    {
        $id = $_GET['id'];
        $this->categoryModel->Delete($id);
        header('Location: http://localhost/mvc_it18/index.php?c=Category');
    }
}
<?php
require_once SYSTEM_PATH . '/Models/Post.php';
require_once SYSTEM_PATH . '/Models/Category.php';

class PostController
{
    private $postModel;
    private $categoryModel;
    public function __construct()
    {
        $this->postModel = new Post();
        $this->categoryModel = new Category();
    }

    function Index()
    {
        $data = $this->postModel->GetList();
        require_once SYSTEM_PATH.'/Views/Post/index.php';
    }

    function Add()
    {
        $categories = $this->categoryModel->GetList();
        require_once SYSTEM_PATH . '/Views/Post/add.php';
    }

    function SaveAdd(){
        $post = new PostObject($_POST['title'],$_POST['category_id'],$_POST['detail']);
        $kq = $this->postModel->Add($post);
        if($kq)
            header('Location: http://localhost/mvc_it18/index.php?c=Post');
        else
            header('Location: http://localhost/mvc_it18/index.php?c=Post&a=Add');
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
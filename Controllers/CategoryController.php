<?php
require_once SYSTEM_PATH.'/Models/Category.php';
class CategoryController
{
    private $categoryModel;
    public function __construct()
    {
        $this->categoryModel = new Category();
        for ($i = 0; $i<10; $i++){
            $c = new Category();
            $c->id = $i;
            $c->name = 'Danh mục '.$i;
            $c->desc = 'Mô tả '.$i;
            $this->categoryModel->Add($c);
        }
    }

    function Index()
    {
        $result = $this->categoryModel->LoadData();
        require_once SYSTEM_PATH.'/Views/Category/index.php';
    }

    function Add()
    {
        require_once SYSTEM_PATH.'/Views/Category/add.php';
    }

    function Edit()
    {
        $id = $_GET['id'];
        $category = $this->categoryModel->Find($id);

        require_once SYSTEM_PATH.'/Views/Category/edit.php';
    }

    function Delete()
    {
        echo 'Thực thi xóa danh mục';
    }
}
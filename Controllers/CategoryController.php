<?php
require_once SYSTEM_PATH . '/Models/Category.php';

class CategoryController
{
    private $categoryModel;

    public function __construct()
    {

    }

    function Index()
    {
        // OOP mysqli
        //B1: Kết nối tới hệ QTCSDL
        $mysqli = new mysqli('localhost', 'root', '','mvc');
        //B2: Chọn CSDL
        //$mysqli->select_db('mvc');
        //B3: Chọn bảng mã
        $mysqli->query("SET NAMES 'UTF8'");

        //B4: Xử lý CSDL
        $query = 'SELECT * FROM categories';
        $result = $mysqli->query($query);
        $data = $result->fetch_all();
        //B5: Dọn dẹp
        $result->close();
        //B6: Đóng kết nối
        $mysqli->close();
        //mysqli
        //$link = mysqli_connect('hostname', 'username', 'password', 'dbname');
        //mysql
        //$link = mysql_connect('hostname', 'username', 'password');

      //  $result = $this->categoryModel->LoadData();
        require_once SYSTEM_PATH.'/Views/Category/index.php';
    }

    function Add()
    {
        require_once SYSTEM_PATH . '/Views/Category/add.php';
    }

    function SaveAdd(){
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $query = "INSERT INTO categories(`Name`, `Desc`) VALUES('$name', '$desc')";

        //B1: Kết nối tới hệ QTCSDL
        $mysqli = new mysqli('localhost', 'root', '','mvc');
        //B3: Chọn bảng mã
        $mysqli->query("SET NAMES 'UTF8'");

        //B4: Xử lý CSDL
        $result = $mysqli->query($query);

        //B6: Đóng kết nối
        $mysqli->close();
        header('Location: http://localhost/mvc_it18/index.php?c=Category');
    }

    function Edit()
    {
        $id = $_GET['id'];
        $query = "SELECT * FROM categories WHERE id = $id";
        //B1: Kết nối tới hệ QTCSDL
        $mysqli = new mysqli('localhost', 'root', '','mvc');
        //B3: Chọn bảng mã
        $mysqli->query("SET NAMES 'UTF8'");

        //B4: Xử lý CSDL
        $result = $mysqli->query($query);
        $data = $result->fetch_row();
        //Dọn dẹp
        $result->close();
        //B6: Đóng kết nối
        $mysqli->close();
        require_once SYSTEM_PATH . '/Views/Category/edit.php';
    }

    function SaveUpdate(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $query = "UPDATE categories SET `name`='$name', `desc`='$desc' WHERE id = $id";
        //B1: Kết nối tới hệ QTCSDL
        $mysqli = new mysqli('localhost', 'root', '','mvc');
        //B3: Chọn bảng mã
        $mysqli->query("SET NAMES 'UTF8'");

        //B4: Xử lý CSDL
        $result = $mysqli->query($query);

        //B6: Đóng kết nối
        $mysqli->close();
        header('Location: http://localhost/mvc_it18/index.php?c=Category');
    }

    function Delete()
    {
        $id = $_GET['id'];
        $query = "DELETE FROM categories WHERE id= $id";
        //B1: Kết nối tới hệ QTCSDL
        $mysqli = new mysqli('localhost', 'root', '','mvc');
        //B3: Chọn bảng mã
        $mysqli->query("SET NAMES 'UTF8'");

        //B4: Xử lý CSDL
        $result = $mysqli->query($query);

        //B6: Đóng kết nối
        $mysqli->close();
        header('Location: http://localhost/mvc_it18/index.php?c=Category');
    }
}
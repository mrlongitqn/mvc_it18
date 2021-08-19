<?php

class PostController
{
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
        $query = "SELECT p.id, p.image, p.title, c.`name` as 'category' FROM posts p, categories c 
WHERE p.category_id = c.id ORDER BY id DESC";
        $result = $mysqli->query($query);
        $data = $result->fetch_all();
        //B5: Dọn dẹp
        $result->close();
        //B6: Đóng kết nối
        $mysqli->close();
        require_once SYSTEM_PATH.'/Views/Post/index.php';
    }
    function Add()
    {
        //B1: Kết nối tới hệ QTCSDL
        $mysqli = new mysqli('localhost', 'root', '','mvc');
        //B3: Chọn bảng mã
        $mysqli->query("SET NAMES 'UTF8'");

        //B4: Xử lý CSDL
        $result = $mysqli->query("select * from categories");
        $categories = $result->fetch_all();
        //B6: Đóng kết nối
        $mysqli->close();
        require_once SYSTEM_PATH . '/Views/Post/add.php';
    }

    function SaveAdd(){
        $title = $_POST['title'];
        $detail = $_POST['detail'];
        $category_id = $_POST['category_id'];

        $query = "INSERT INTO posts(title, detail, category_id) VALUES('$title', '$detail', '$category_id')";

        //B1: Kết nối tới hệ QTCSDL
        $mysqli = new mysqli('localhost', 'root', '','mvc');
        //B3: Chọn bảng mã
        $mysqli->query("SET NAMES 'UTF8'");

        //B4: Xử lý CSDL
        $result = $mysqli->query($query);
        //B6: Đóng kết nối
        $mysqli->close();
        header('Location: http://localhost/mvc_it18/index.php?c=Post');
    }
}
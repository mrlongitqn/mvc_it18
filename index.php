<?php
//File mồi, nhận dữ liệu, nhận controller, action để xử lý.
define('SYSTEM_PATH', __DIR__);
require_once('common/db.php');
$c = isset($_GET['c']) ? $_GET['c'] : 'Home';
$a = isset($_GET['a']) ? $_GET['a'] : 'Index';
//Tạo tên controller từ get c và gán với hậu tố Controller
$controller = $c.'Controller';
//tạo đường dẫn tuyệt đối tới file controller.php
$path_controller = 'Controllers/'.$controller.'.php';
//Kiểm tra file controller có tồn tại không?
if(!file_exists($path_controller)){
    echo  'File '.$path_controller.' không tồn tại';
    die();
}
//Chèn file controller vào trong index.php //Require, include, require_once, include_once
require_once $path_controller;
if(!class_exists($controller)){
    echo 'Class '. $controller.' không tồn tại';
    die();
}
//Khởi tạo 1 đối tượng từ class thông qua biến tên
$controllerObject = new $controller();
//Kiểm tra phương thức (action) có tồn tại hay không?
if(!method_exists($controller, $a)){
   echo "function $a không tồn tại trong $controller";
   die();
}
//Thực hiện gọi action của controller
$controllerObject->{$a}();
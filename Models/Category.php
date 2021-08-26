<?php


class Category
{
    public $id;
    public $name;
    public $desc;
    public $data = [];

    private $mysqli;

    public function __construct()
    {
        $this->mysqli = new mysqli(HOST, DBUSER, DBPASSWORD, DBNAME);
    }

    public function __destruct()
    {
        $this->mysqli->close();
    }

    function GetList()
    {
        $query = 'SELECT * FROM categories ORDER BY id DESC';
        $result = $this->mysqli->query($query);
        return $result->fetch_all();
    }

    function GetById($id)
    {
        $query = "SELECT * FROM categories WHERE id = $id";
        $result = $this->mysqli->query($query);
        return $result->fetch_row();
    }

    function Add($name, $desc)
    {
        $query = "INSERT INTO categories(`Name`, `Desc`) VALUES('$name', '$desc')";
        return $this->mysqli->query($query);
    }

    function Update($id, $name, $desc){
        $query = "UPDATE categories SET `name`='$name', `desc`='$desc' WHERE id = $id";
        return $this->mysqli->query($query);
    }

    function Delete($id){
        $query = "DELETE FROM categories WHERE id= $id";
        return $this->mysqli->query($query);
    }
}
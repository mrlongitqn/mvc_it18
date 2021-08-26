<?php

require_once(SYSTEM_PATH.'/Models/PostObject.php');
class Post
{
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
        $query = 'SELECT p.id, title, c.	`name`  FROM posts p, categories c
                    WHERE p.category_id = c.id
                    ORDER BY p.id DESC';
        $result = $this->mysqli->query($query);
        return $result->fetch_all();
    }

    function GetById($id)
    {
        $query = "SELECT * FROM posts WHERE id = $id";
        $result = $this->mysqli->query($query);
        return $result->fetch_row();
    }

    function Add(PostObject $post)
    {
        $query = "INSERT INTO posts(title, category_id, detail) VALUES('$post->title', '$post->category_id', '$post->detail')";
        return $this->mysqli->query($query);
    }

    function Update($id, $name, $desc)
    {
        $query = "UPDATE categories SET `name`='$name', `desc`='$desc' WHERE id = $id";
        return $this->mysqli->query($query);
    }

    function Delete($id)
    {
        $query = "DELETE FROM categories WHERE id= $id";
        return $this->mysqli->query($query);
    }
}
<?php

namespace Models;

use mysqli;

class Article
{
    protected $db;

    public function __construct()
    {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function create($title, $text)
    {
        if ($this->db->connect_errno === 0) {
            $query = "insert into articles (title, text) values ('$title', '$text')";
            if (!$this->db->query($query)) {
                die($this->db->error);
            }
        }
    }

    public function all()
    {
        if ($this->db->connect_errno === 0) {
            $query = "select * from articles";
            $result = $this->db->query($query);
            if(!$query){
                die($this->db->error);
            }
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }

    public function delete($id){
        if ($this->db->connect_errno === 0) {
            $query = "delete from articles where id = $id";
            $this->db->query($query);
        }
    }
}
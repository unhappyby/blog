<?php
  error_reporting(E_ERROR);
  include_once '../database.php';
  include_once 'database.php';

class Articles
{
    public function showAll()
    {
        $query = "SELECT * FROM articles";
        $result = queryMySQL($query);

        $arr = [];
        while ($row = $result->fetch_assoc()) {
            array_push($arr, $row);
        }
        return $arr;
    }

    public function createArticle($title, $date, $content)
    {
        global $link;

        //preparation
        $title = trim($title);
        $text = trim($text);

        //string check
        $title = $link->real_escape_string($title);
        $text = $link->real_escape_string($text);

        //query
        $query = "INSERT INTO articles (title, date, content) VALUES ('$title', '$date', '$content')";

        $result = queryMySQL($query);
        if (!$result) {
            die (Error);
        }

        return true;
    }

    public function getArticle($id)
    {
        $query = "SELECT * FROM articles WHERE id='$id'";

        $result = queryMySQL($query);
        if (!$result) {
            die (Error);
        }

        $row = $result->fetch_assoc();
        return $row;
    }

    public function updateArticle($id, $title, $date, $content)
    {
        global $link;

        //preparation
        $title = trim($title);
        $text = trim($text);

        //string check
        $title = $link->real_escape_string($title);
        $text = $link->real_escape_string($text);

        $query = "UPDATE articles SET title='$title', date='$date', content='$content' WHERE id='$id'";

        $result = queryMySQL($query);
        if (!$result) {
            die (Error);
        }

        return true;
    }

    public function deleteArticle($id)
    {
        global $link;

        $query = "DELETE FROM articles WHERE id='$id' ";

        $result = queryMySQL($query);
        if (!$result) {
            die (Error);
        }

        return true;
    }
    // на титульной странице показывается лишь чать текста
    public function introArticle($text, $len = 255)
    {

        if (strlen($text) > $len) {
            $text = (substr($text, 0, $len-1))."...";
        }

        return $text;
    }
}

<?php
  /*
   * Для работы сайта, в базе данных нужно создать базу данных
   * с названием blog и в базе таблицу
   * CREATE TABLE articles (id INT PRIMARY KEY auto_increment,
   * title VARCHAR(255), date DATE, content TEXT);
   */
  const MYSQL_SERVER = '127.0.0.1';
  const MYSQL_USER = 'root';
  const MYSQL_PASS = 'root';
  const MYSQL_DB = 'blog';

  $link = new mysqli(MYSQL_SERVER, MYSQL_USER, MYSQL_PASS, MYSQL_DB);
if ($link->connect_error) {
    die($link->connect_error);
}

function queryMySQL($string)
{
    global $link;

    $result = $link->query($string);
    if (!$result) {
        die($link->error);
    }
    return $result;
}

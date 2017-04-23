<?php
  require_once "models/Articles.php";

  $articles = new Articles();

if (isset($_GET['id'])) {
    $arr = $articles->getArticle($_GET['id']);
}
  
  include 'views/article.php';

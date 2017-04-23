<?php
  require_once "models/Articles.php";

  $articles = new Articles();
  $arr = $articles->showAll();

  include 'views/articles.php';

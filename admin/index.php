<?php
  /*
   * Чтобы попасть в админ панель в файле .htaccess в пункте AuthUserFile
   * укажи полный путь к файлу .htpasswd.
   */
  require_once '../models/Articles.php';

  $articles = new Articles();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "";
}
  // тут всякие сложные ifы с GET-запросами
if ($action == "add") {
    if (!empty($_POST)) {
        $articles->createArticle($_POST['title'], $_POST['date'], $_POST['content']);

        header("Location: index.php");
    } else {
        include '../views/article_admin.php';
    }
} elseif ($action == "edit") {
    if (!isset($_GET['id'])) {
        header("Location: index.php");
    }
    $id = (int)$_GET['id'];

    if (!empty($_POST) && $id > 0) {
        $articles->updateArticle($id, $_POST['title'], $_POST['date'], $_POST['content']);
        header("Location: index.php");
    }

    $article = $articles->getArticle($id);
    include '../views/article_admin.php';
} elseif ($action == "delete") {
    if (!isset($_GET['id'])) {
        header("Location: index.php");
    }
    $id = (int)$_GET['id'];

    $articles->deleteArticle($id);
    header("Location: index.php");
} else {
    $arr = $articles->showAll();
    include '../views/articles_admin.php';
}

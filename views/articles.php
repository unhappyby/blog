<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>
    <header>
      <h1><a href="index.php">My first blog</a></h1>
      <a class="btn btn-default btn-xs" href="admin">Admin Panel</a>
    </header>
    <main class="container">
      <?php foreach ($arr as $a): ?>
      <div>
        <h2><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h2>
        <em>Posted: <?=$a['date']?></em>
        <p><?=$articles->introArticle($a['content'])?></p>
      </div>
    <?php endforeach; ?>
    </main>
    <footer>
      <h1>Some text</h1>
    </footer>
  </body>
</html>

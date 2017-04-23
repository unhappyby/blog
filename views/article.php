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
      <a href="index.php"><h1>My first blog</h1></a>
      <a class="btn btn-default btn-xs" href="admin">Admin Panel</a>
    </header>
    <main class="container">
      <div>
        <h2><?=$arr['title']?></h2>
        <em>Posted: <?=$arr['date']?></em>
        <p><?=$arr['content']?></p>
      </div>
    </main>
    <footer>
      <h1>Some text</h1>
    </footer>
  </body>
</html>

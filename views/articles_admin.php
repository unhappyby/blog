<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../bootstrap.min.css">
  </head>
  <body>
    <header>
      <a href="../index.php"><h1>My first blog</h1></a>
    </header>
    <main class="container">
      <div>
        <a class="btn btn-default" href="index.php?action=add">Add article</a>
        <table class="table">
          <tr>
            <th>Date</th>
            <th>Title</th>
            <th></th>
            <th></th>
          </tr>
          <?php foreach ($arr as $a): ?>
          <tr>
            <td><?=$a['date']?></td>
            <td><?=$a['title']?></td>
            <td><a href="index.php?action=edit&id=<?=$a['id']?>">Edit</a></td>
            <td><a href="index.php?action=delete&id=<?=$a['id']?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </main>
    <footer>
      <h1>Some text</h1>
    </footer>
  </body>
</html>

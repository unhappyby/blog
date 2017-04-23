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
      <form class="" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>" method="post">
        <div class="form-group">
          <label for="title">Title</label><br>
          <input type="text" name="title" id="title" value="<?=$article['title']?>"
          placeholder="Title" autofocus required>
        </div>
        <div class="form-group">
          <label for="date">Date</label><br>
          <input  type="date" name="date" id="date" value="<?=$article['date']?>"
          autofocus required>
        </div>
        <label for="content">Content</label><br>
        <textarea class="form-control" rows="5" name="content"
        id="content" autofocus required><?=$article['content']?></textarea>
        <br>
        <input type="submit" value="Save" class="btn btn-default">
      </form>
    </main>
    <footer>
      <h1>Some text</h1>
    </footer>
  </body>
</html>

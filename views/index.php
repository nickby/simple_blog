<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i|Open+Sans:400,400i,700,700i&subset=cyrillic" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css" />
        <title>Блог</title>
    </head>
    <body>
        <div class="container">
            <h1>Мой первый блог</h1>
            <a href="admin/index.php">Панель администратора</a>
            <?php foreach ($articles as $article): ?>
                <div class="article">
                    <a href="views/article.php?id=<?php echo $article['id']; ?>">
                        <h3><?php echo $article['title']; ?></h3>
                    </a>
                    <em>
                        Public <?php echo $article['date']; ?> 
                        by <a href="#"><?php echo $article['author']; ?></a> 
                        in <a href=""><?php echo $article['category']; ?></a>
                    </em>
                    <p><?php echo $article['content']; ?></p>
                </div>
            <?php endforeach; ?>

            <footer>
                <p>Мой первый блог<br>Copyright &copy; 2016</p>
            </footer>
        </div>
    </body>
</html>
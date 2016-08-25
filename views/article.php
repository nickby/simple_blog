<?php
require_once '../models/articles.php';
$article = getArticle($_GET['id']);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i|Open+Sans:400,400i,700,700i&subset=cyrillic" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css" />
        <title>Блог</title>
    </head>
    <body>
        <div class="container">
            <h1><?php echo $article['title']; ?></h1>

            <div class="article">
                <h3><a href="#"><?php echo $article['author']; ?></a></h3>
                <em>Public <?php echo $article['date']; ?> in <a href="#"><?php echo $article['category']; ?></a></em>
                <p><?php echo $article['content']; ?></p>
            </div>

            <a href="../">Вернуться ко всем записям блога</a>

            <footer>
                <p>Мой первый блог<br>Copyright &copy; 2016</p>
            </footer>
        </div>
    </body>
</html>
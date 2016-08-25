<?php
//    if (isset($_GET['action']) && !empty($_GET['action'])) {
//        header("Location: /simple_blog/admin/" . $_GET['action'] . ".php?id=" . $_GET['id']);
//    }

require_once("../models/articles.php");
$articles = getAllArticles();
$categories = getAllCategories();
$authores = getAllAuthores();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i|Open+Sans:400,400i,700,700i&subset=cyrillic" rel="stylesheet">
        <!--<link rel="stylesheet" href="../css/style.css" />-->
        <title>Админка блога</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Панель администратора</h1>
                <hr>
                <div class="col-xs-12">
                    <h2><a href="edit.php"><i class="glyphicon glyphicon-plus-sign"></i></a> Список статей <span class="badge"><?php echo count($articles); ?></span></h2> 
                    
                    
                    <table class="table table-hover ">
                        <thead><tr class="active">
                                <th class="text-center">Id</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Author</th>
                                <th class="text-center">Category</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Del</th>
                            </tr>
                        </thead>

                        <?php foreach ($articles as $article): ?>

                            <tr>
                                <td class="text-center"><?php echo $article['id']; ?></td>    
                                <td class="text-left"><?php echo $article['title']; ?></td>    
                                <td class="text-center"><?php echo $article['date']; ?></td>    
                                <td class="text-left"><?php echo $article['author']; ?></td>    
                                <td class="text-center"><?php echo $article['category']; ?></td>    
                                <th class="text-center"><a href="edit.php?id=<?php echo $article['id']; ?>"><i class="glyphicon glyphicon-pencil"></i></a></th>
                                <th class="text-center"><a href="delete.php?id=<?php echo $article['id']; ?>"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>

                        <?php endforeach; ?>
                    </table>
                </div>
            </div>    
            <div class="row">
                <div class="col-xs-6">
                    <h2><a href="#"><i class="glyphicon glyphicon-info-sign"></i></a> Категории блога <span class="badge"><?php echo count($categories); ?></span></a></h2>
                    <table class="table table-hover ">
                        <thead>
                            <tr class="active">
                                <th class="text-center">Id</th>
                                <th class="text-center">Category name</th>
                            </tr>
                        </thead>
                        <?php foreach ($categories as $category): ?>
                            <tr>
                                <td class="text-center"><?php echo $category['id']; ?></td>    
                                <td class="text-left"><?php echo $category['name']; ?></td>    
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div class="col-xs-6">
                    <h2><a href="#"><i class="glyphicon glyphicon-info-sign"></i></a>Авторы постов <span class="badge"><?php echo count($authores); ?></span></a></h2>
                    <table class="table table-hover ">
                        <thead>
                            <tr class="active">
                                <th class="text-center">Id</th>
                                <th class="text-center">Author name</th>
                            </tr>
                        </thead>

                        <?php foreach ($authores as $author): ?>
                            <tr>
                                <td class="text-center"><?php echo $author['id']; ?></td>    
                                <td class="text-left"><?php echo $author['name']; ?></td>    
                            </tr>
                        <?php endforeach; ?>

                    </table>
                </div>
            </div>
            <div class="row">
                <footer>
                    <hr>
                    <p>Copyright &copy; 2016</p>
                </footer>
            </div>
        </div>
    </body>
</html>
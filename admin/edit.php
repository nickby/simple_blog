<?php
$id = 0;
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']);
}
require_once("../models/articles.php");
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
                <?php if ($id): ?>
                    <h2>Редактирование записи #<?php echo "$id"; ?></h2>
                <?php else: ?>    
                    <h2>Ввод новой записи</h2>
                <?php endif; ?>    

            </div>  
            <div class="row">
                <div class="сol-xs-12 col-md-6 col-lg-4">
                    <form>
                        <div class="form-group">
                            <label for="articleTitle">Название статьи</label>
                            <input type="text" class="form-control" id="articleTitle" placeholder="Название статьи">
                        </div>
                        <input type="date" >

                        <button type="submit" class="btn btn-success">Записать</button>
                    </form>                    
                </div>
            </div>

            <div class="row">
                <hr>
                <a href="index.php">Вернуться назад</a>
                <footer>
                    <hr>
                    <p>Copyright &copy; 2016</p>
                </footer>
            </div>
        </div>
    </body>
</html>
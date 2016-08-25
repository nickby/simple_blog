<?php
$id = 0;
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']);
}
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
                <h2>Удаление записи #<?php echo "$id"; ?></h2>

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
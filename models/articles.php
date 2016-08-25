<?php

function getConnection()
{
    $link = mysqli_connect("localhost", "root", "", "simple_blog");
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    mysqli_set_charset($link, 'utf8');
    return $link;
}

function getAllArticles()
{
    $link = getConnection();
    $result = mysqli_query($link, 'SELECT article.id AS id, title, date, category.name AS category, author.name AS author, content FROM article LEFT JOIN category ON article.category_id = category.id LEFT JOIN author ON article.author_id = author.id ORDER BY date DESC');
    if (!$result) {
        die('Could not run query: ' . mysqli_error($link));
    }

    $articles = array();
    $ind = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $articles[$ind] = $row;
        $ind++;
    }
    return $articles;
}

function getArticle($id)
{
    $link = getConnection();
    $result = mysqli_query($link, 'SELECT article.id AS id, title, date, category.name AS category, author.name AS author, content FROM article LEFT JOIN category ON article.category_id = category.id LEFT JOIN author ON article.author_id = author.id WHERE article.id=' . $id);

    if (!$result) {
        die(mysqli_error($link));
    }

    return $result->fetch_assoc();
}

function newArticle($title, $date, $content)
{
    
}

function editArticle($id, $title, $date, $content)
{
    
}

function deleteArticle($id)
{
    
}


function getAllCategories()
{
    $link = getConnection();
    $result = mysqli_query($link, 'SELECT * FROM category ORDER BY id');
    if (!$result) {
        die('Could not run query: ' . mysqli_error($link));
    }

    $list = array();
    $ind = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $list[$ind] = $row;
        $ind++;
    }
    return $list;
}

function getAllAuthores()
{
    $link = getConnection();
    $result = mysqli_query($link, 'SELECT * FROM author ORDER BY id');
    if (!$result) {
        die('Could not run query: ' . mysqli_error($link));
    }

    $list = array();
    $ind = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $list[$ind] = $row;
        $ind++;
    }
    return $list;
}


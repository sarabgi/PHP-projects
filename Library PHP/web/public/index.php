<?php

require_once __DIR__ . "./../autoload.php";

use app\controllers\BookController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add-book'])) {
        // Handle Add Book
        $bookController = new BookController();
        $bookController->addBook($_POST['name-add'], $_POST['author-add'], $_POST['isbn-add']);
    } elseif (isset($_POST['find-book'])) {
        // Handle Find Book
        $bookController = new BookController();
        $bookController->getBookByISBN($_POST['isbn-find']);
    }
}else{
    if (isset($_GET['url'])) {
        $url = rtrim($_GET['url'], '/');
        var_dump($url);
    }
    require_once "../app/views/index.php";
}

?>
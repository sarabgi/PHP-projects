<?php

namespace app\controllers;
use app\models\BookModel;

class BookController{
    function getBookByISBN(int $isbn){
        $book = new BookModel();
        $book->read($isbn);
        require_once(__DIR__ . "/../views/BookByIDView.php");
    }
    function addBook(string $name, string $author, int $isbn){
        $book = new BookModel();
        $book->setName($name);
        $book->setAuthor($author);
        $book->setISBN($isbn);
        $book->create();
        header("Location: public/index.php");
        exit;
    }
}

?>